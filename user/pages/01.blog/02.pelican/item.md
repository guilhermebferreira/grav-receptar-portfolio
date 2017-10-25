---
title: Criando um blog estatico com Pelican
date: 17:20 01/23/2017
taxonomy:
    category: artigo
    tag: [CMS, Pelican]

description:
  - option: Linguagem:
    value: Python
  - option: Tipo:
    value: Static CMS
  - option: Dificuldade:
    value: Iniciante
---

![Pelican - sites estáticos][1]

[1]: https://cloud.githubusercontent.com/assets/5393392/22984032/ea8276fe-f382-11e6-85de-ad5b9e00ca31.png

[Pelican](https://github.com/getpelican/pelican) é um gerador de sites estaticos, escrito em Python.

Sua instalação e execução é bastante simples e depende de poucas linhas de comando.

#Instalação e configuraçao do Pelican
	pip3 install pelican markdown
	pelican-quickstart 

#Execução do pelican em abiente de local
	cd output/
	python3 -m pelican.server

#Criação de conteúdo
Para criar conteudo, basta criar arquivos de texto dentro do diretório content/ utilizando a extenção .md ([markdown](http://daringfireball.net/projects/markdown/) )
Os metadados devem ser informado no inicio do arquivo como o exemplo abaixo:

	Title: Criando um blog estatico com Pelican
	Date: 2017-01-23 17:20
	Category: CMS

Depois basta rodar o comando 

	pelican content