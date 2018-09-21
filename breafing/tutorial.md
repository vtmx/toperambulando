---
title: Tutorial
draft: true
---

# Tutorial

## Front matter

Front matter são dados correspondente ao conteúdo da página, no Hugo podemos exibir esses dados assim como organizar como as páginas serão exibidas.
No Hugo essas informações ficam entre os caractéres ---, utilizando o formato `atributo: valor`, como no exemplo abaixo:

```yml
---
title: Do Rio de Janeiro ao Atacama de motocicleta
date: 2018-08-02
type: post
categories: [Brasil, Dicas]
tags: [Aventura, Corrida]
---
```

No exemplo temos as informações correspondente ao conteúdo. Nele temos o título do post, a data de publicação, o tipo de página, as categorias e tags.
Podemos utilizar o atributo draft para deixar a página como rascunho . `draft:true`

```yml
---
title: Do Rio de Janeiro ao Atacama de motocicleta
date: 2018-08-02
type: post
draft: true
categories: [Brasil, Dicas]
tags: [Aventura, Corrida]
---
```

O atributo draft não é obrigatório, o Hugo entende sua omissão como falsa `draft:false`.