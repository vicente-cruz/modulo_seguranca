<?php
/**
 * Crawlers: robôs dos Motores de Buscas. Navegam 24h, nos sites, palavras chaves.
 * Dica: Colocar links do site pessoal nos outros sites para que os crawlers encontrem.
 * 
 * 1) Criar arquivo "robots.txt" e colocar na raiz do site, no mesmo lugar do index.
 * 2) Inserir o nome dos robôs dos motores de busca e a regra do que buscar.
 *  ex: google = Googlebot, yahoo = Slurp, bing = Bingbot
 *  2.1) Regras específicas para diferentes conteúdos dos diferentes crawlers:
 *  ex do google:
 *      imagens - User-agent: Googlebot-images
 *      adsense - User-agent: Adsbot-Google
 *  2.2) Por padrão, colocar: User-agent: *
 *  2.3) Desativar a pasta 'admin', arquivos específicos, etc...
 *      ...
 *      Disallow: /admin
 *      Disallow: /admin/config.php
 * 3) Pegar a configuração do robots.txt do facebook.
 *  3.1) acessar: https://www.facebook.com/robots.txt
 *  3.2) acessar: https://www.google.com/robots.txt
 *  3.3) acessar: https://www.whitehouse.gov/robots.txt
 */

