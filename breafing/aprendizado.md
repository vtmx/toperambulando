---
title: Aprendizado
draft: true
---

# Aprendizado

## Duvidas

- Server: No terminal usar o comando `hugo server -D` para testar o site com os arquivos que estão em rascunho
- Taxinomias: Categories e Tags são padrão no Hugo, se criar uma nova terá que fazer um novo template
- Paginação: Obriga ter todos os posts ser de um único tipo, no caso do toperambulando todos tinham que está na página post
- Pasta post: Se for com nome posts, ao abrir o arquivo fica com a URL /posts/nome-do-post/
- Menu: Menu padrão do Hugo é daquele jeito, case sensitive e qualquer alteração até no nome de pre pra icon gera problema
- Frontmatter não funciona com caracter - usar _ no lugar

## Comandos

- `{{ .Site.BaseUrl }}` gives me localhost:1313
- `{{ .Url }}` saída /
- `{{ if or (.Params.date) (.Params.categories) (.Params.tags) }}`
- `{{ if .Params.date }}`
- `{{ if .IsHome }} {{ if not .IsHome }}` Verifica se a página é a principal ou não
- `{{ template "_internal/disqus.html" . }} {{ partial "disqus" . }} {{ partial "disqus-counter" . }}` template para disqus
- `{{ if eq .Params.featured_align "right" }}Right{{ end }}`: Verifica condições do frontmatter
- `{{ if .IsPage }}single{{ else }}list{{ end }} <body{{ with .Type }} class="{{ . }}" {{ end }}>`: Teste classe body


## Shortcodes
- `{{<figure src="/media/spf13.jpg" title="Steve Francia">}}`: Adiciona uma figura com caption
- `{{<youtube w7Ft2ymGmfc>}}`: Vídeo do youtube

## Links
- Alternativas: https://cloudcannon.com/tips/2014/12/12/the-ultimate-list-of-services-for-static-websites.html
- Ordenação de menu: https://stackoverflow.com/questions/35393220/ordering-menu-items
- https://gohugo.io/content-management/shortcodes/