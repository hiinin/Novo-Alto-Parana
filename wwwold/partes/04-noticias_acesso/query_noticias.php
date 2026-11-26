<?php
// Query para notícias em destaque com secretaria
$qryNoticiaDestaque = mysql_query("SELECT n.id, 
                                          n.titulo,
                                          n.artigo,
                                          n.data_inicial_publicacao,
                                          GROUP_CONCAT(s.secretaria SEPARATOR ', ') as secretarias
                                     FROM pref_noticia n
                                     LEFT JOIN pref_noticia_secretaria ns ON n.id = ns.id_noticia
                                     LEFT JOIN pref_secretaria s ON ns.id_secretaria = s.id
                                     WHERE n.tipo = 'F' 
                                       AND n.status_registro = 'A' 
                                       AND n.id_cliente = '$cliente'
                                       AND n.data_inicial_publicacao <= NOW() 
                                     GROUP BY n.id
                                     ORDER BY n.id DESC 
                                     LIMIT 2");

if (mysql_num_rows($qryNoticiaDestaque) > 0) {
  $vetor_destaque = array();
  $indice = 0;
  while ($noticias = mysql_fetch_assoc($qryNoticiaDestaque)) {
    $vetor_destaque[$indice]['link'] = $CAMINHO . "/index.php?sessao=" .  verifica($sequencia . $noticiaVisualiza . $complemento) . "&id=" . verifica($noticias['id']);
    $vetor_destaque[$indice]['id'] = $noticias['id'];
    $vetor_destaque[$indice]['titulo'] = $noticias['titulo'];
    $vetor_destaque[$indice]['artigo'] = $noticias['artigo'];
    $vetor_destaque[$indice]['secretarias'] = $noticias['secretarias']; // Adiciona as secretarias
    $foto = mysql_fetch_assoc(mysql_query("SELECT foto, 
                                                          legenda 
                                                     FROM pref_noticia_foto 
                                                    WHERE id_artigo = '$noticias[id]'  
                                                      AND status_registro = 'A'
                                                 ORDER BY ordem ASC, id DESC 
                                                    LIMIT 1"));
    $vetor_destaque[$indice]['foto'] = $CAMINHOIMG . "/gd_" . $foto['foto'];
    $vetor_destaque[$indice]['data_inicial_publicacao'] = $noticias['data_inicial_publicacao'];
    $vetor_destaque[$indice]['legenda'] = $foto['legenda'];
    $indice++;
  }
}

// Query para notícias especiais com secretaria
$qryUltimas = mysql_query("SELECT n.id, 
                                    n.titulo, 
                                    n.artigo,
                                    n.data_inicial_publicacao,
                                    GROUP_CONCAT(s.secretaria SEPARATOR ', ') as secretarias
                               FROM pref_noticia n
                               LEFT JOIN pref_noticia_secretaria ns ON n.id = ns.id_noticia
                               LEFT JOIN pref_secretaria s ON ns.id_secretaria = s.id
                               WHERE n.tipo = 'U' 
                                 AND n.status_registro = 'A' 
                                 AND n.id_cliente = '$cliente'
                                  AND n.data_inicial_publicacao <= NOW() 
                               GROUP BY n.id
                               ORDER BY n.id DESC 
                               LIMIT 3");

if (mysql_num_rows($qryUltimas) > 0) {
  $vetorUltimas = array();
  $indice = 0;
  while ($ultimas = mysql_fetch_assoc($qryUltimas)) {
    $vetorUltimas[$indice]['link'] = $CAMINHO . "/index.php?sessao=" .  verifica($sequencia . $noticiaVisualiza . $complemento) . "&id=" . verifica($ultimas['id']);
    $vetorUltimas[$indice]['id'] = $ultimas['id'];
    $vetorUltimas[$indice]['titulo'] = $ultimas['titulo'];
    $vetorUltimas[$indice]['artigo'] = $ultimas['artigo'];
    $vetorUltimas[$indice]['secretarias'] = $ultimas['secretarias']; // Adiciona as secretarias
    $foto = mysql_fetch_assoc(mysql_query("SELECT foto, 
                                                          legenda 
                                                     FROM pref_noticia_foto 
                                                    WHERE id_artigo = '$ultimas[id]'  
                                                      AND status_registro = 'A'
                                                 ORDER BY id 
                                                    LIMIT 1"));
    $vetorUltimas[$indice]['foto'] = $CAMINHOIMG . "/" . $foto['foto'];
    $vetorUltimas[$indice]['data_inicial_publicacao'] = $ultimas['data_inicial_publicacao'];
    $vetorUltimas[$indice]['legenda'] = $foto['legenda'];
    $indice++;
  }
}

if (!function_exists('formata_data_abrev')) {
  function formata_data_abrev($data)
  {
    if (empty($data)) return '';
    $meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
    $dt = DateTime::createFromFormat('d/m/Y', $data) ?: DateTime::createFromFormat('Y-m-d', $data);
    if (!$dt) return $data;
    return $dt->format('d') . ' ' . $meses[(int)$dt->format('n') - 1] . ' ' . $dt->format('Y');
  }
}

if (!function_exists('normaliza_secretaria')) {
  /**
   * Normaliza o nome da secretaria para usar como chave no mapa de cores.
   * Remove entidades HTML, acentos, prefixos repetidos e espaços extras.
   */
  function normaliza_secretaria($nome)
  {
    if (empty($nome)) return '';

    // 1. Decodifica entidades HTML (ex: &ccedil; -> ç)
    $nome = html_entity_decode($nome, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    // 2. Remove acentos
    $nome = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $nome);

    // 3. Converte para minúsculo e remove espaços extras
    $nome = strtolower(trim($nome));

    // 4. Remove prefixos comuns que variam entre cadastros
    $prefixos = [
      'secretaria municipal de ',
      'secretaria municipal da ',
      'secretaria municipal do ',
      'secretaria municipal ',
      'secretaria de ',
      'secretaria da ',
      'secretaria do ',
      'secretaria ',
      'departamento de ',
      'departamento da ',
      'departamento do ',
      'departamento ',
      'programa de ',
      'programa ',
    ];
    foreach ($prefixos as $p) {
      if (strpos($nome, $p) === 0) {
        $nome = substr($nome, strlen($p));
        break;
      }
    }

    // 5. Normaliza variações de "e" / "&" / "," para padronizar
    $nome = str_replace([' e ', ' & ', ','], ' ', $nome);
    $nome = preg_replace('/\s+/', ' ', $nome);
    $nome = trim($nome);

    return $nome;
  }
}

if (!function_exists('cor_secretaria')) {
  /**
   * Retorna a cor (hex) associada à secretaria.
   * Faz o match pela chave normalizada.
   */
  function cor_secretaria($nome)
  {
    $chave = normaliza_secretaria($nome);

    // Mapa de cores por secretaria normalizada
    $mapa = [
      // === Educação ===
      'educacao'                                  => '#56AAF3', // Azul

      // === Meio Ambiente ===
      'meio ambiente'                             => '#75AF20', // Verde

      // === Assistência Social ===
      'assistencia social'                        => '#085344', // Rosa claro

      // === Saúde ===
      'saude'                                     => '#E74C3C', // Vermelho

      // === Agricultura ===
      'agricultura'                               => '#27AE60', // Verde escuro

      // === Viação e Obras Públicas ===
      'viacao obras publicas'                     => '#F39C12', // Laranja
      'viacao e obras publicas'                   => '#F39C12',

      // === Esporte, Cultura e Turismo ===
      'esporte cultura turismo'                   => '#9B59B6', // Roxo
      'esporte cultura e turismo'                 => '#9B59B6',

      // === Desenvolvimento Econômico ===
      'desenvolvimento economico'                 => '#16A085', // Turquesa

      // === Administração ===
      'geral administracao'                       => '#34495E', // Azul acinzentado
      'administracao'                             => '#34495E',

      // === Comunicação Social ===
      'comunicacao social'                        => '#E67E22', // Laranja queimado

      // === Planejamento e Infraestrutura ===
      'planejamento infraestrutura'               => '#2980B9',
      'planejamento e infraestrutura'             => '#2980B9',

      // === Finanças ===
      'financas'                                  => '#1F2937', // Cinza escuro

      // === Serviços Urbanos ===
      'servicos urbanos'                          => '#7F8C8D', // Cinza

      // === Tesouraria ===
      'tesouraria'                                => '#8E44AD', // Roxo escuro

      // === Assessoria Jurídica ===
      'assessoria juridica'                       => '#2C3E50', // Azul escuro

      // === Chefe de Gabinete ===
      'chefe gabinete'                            => '#95A5A6', // Cinza claro
      'chefe de gabinete'                         => '#95A5A6',

      // === Poder Executivo ===
      'poder executivo'                           => '#1F2937',

      // === Programa de Prevenção ao Uso de Drogas ===
      'prevencao ao uso drogas'                   => '#D35400',
      'prevencao uso drogas'                      => '#D35400',
    ];

    // Tenta match exato
    if (isset($mapa[$chave])) {
      return $mapa[$chave];
    }

    // Tenta match parcial (se a chave contém alguma chave do mapa)
    foreach ($mapa as $k => $cor) {
      if ($k !== '' && strpos($chave, $k) !== false) {
        return $cor;
      }
    }

    // Fallback: cinza padrão
    return '#1F2937';
  }
}
