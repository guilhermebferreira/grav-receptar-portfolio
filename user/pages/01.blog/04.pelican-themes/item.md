---
title: Utilizando temas no Pelican
date: 17:20 02/20/2017
taxonomy:
    category: artigo
    tag: [CMS, Pelican, theme]
---

![utilizando temas no pelican](https://cloud.githubusercontent.com/assets/5393392/23137957/b92f9b18-f783-11e6-929f-f376299d16b1.png)

Através do site [pelicanthemes](http://www.pelicanthemes.com/) você pode ver uma lista de temas disponiveis para o Pelican

Para utilizar em seu site, baixe os arquivos do tema em uma pasta e utilize o `pelican-themes` para instalar

	pelican-themes --install /home/user/Downloads/blue-penguin-master

Nesse exemplo escolhemos o tema `blue-penguin`.

Você consegue verificar a lista de temas ibnstalado executando o comando `pelican-themes -l` ou `pelican-themes --list`

	$ pelican-themes -l
	blue-penguin-master

Em seguida altere o parametro `THEME` no arquivo `pelicanconf.py` preechendo-o com o nome do tema desejado.

	THEME = 'blue-penguin-master'

![blue-penguin tema para Pelican](https://cloud.githubusercontent.com/assets/5393392/23137991/d203f33c-f783-11e6-8e13-e8e7ff08b4fc.png)

Na proxima vez que o Pelican for executado, o novo tema será carregado.