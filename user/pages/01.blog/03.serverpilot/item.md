---
title: Hospedando sua aplicação PHP com DigitalOcean e Serverpilot
date: 17:00 04/04/2017
taxonomy:
    category: artigos
    tag: [PHP, DigitalOcean, Serverpilot, Host]
---




![Hospedando sua aplicação PHP ou Wordpress, de forma eficiente, rápida e barata, com DigitalOcean e Serverpilot][1]

[1]: https://cloud.githubusercontent.com/assets/5393392/25672380/ab6317ee-3009-11e7-954c-5dbbfc9a7c77.png


O [Digital Ocean](https://m.do.co/c/e988e06e6f7d) dispensa apresentações, mas trata-se de uma das opções mais versáteis para hospedagem de aplicações web.

Apesar de inicialmente não parecer muito amigável para quem não tem skills de infra estrutura( ou configuração de servidores) o custo por recurso disponível o faz bastante atrativo em relação a outras opções de hospedagem.

Para resolver essa dificuldade inicial em relação à configuração do servidor, em se tratando de hospedagem PHP, uma boa solução é utilizar o Serverpilot.

O [Serverpilot](https://serverpilot.io/) conecta-se ao seu droplet ubuntu da digital ocean, e configura o configura como um servidor para rodar o php e o mysql, além de algumas configurações de segurança.

Utilizando Digital Ocean + Serverpilot é possível colocar um site wordpress ou joomla no ar em cerca de 10 minutos.

Isso tudo sem custo nenhum, utilizando a versão *FREE*.

#Configuração de Domínio

O serverpilot também facilita a configuração dos domínios dentro do seu droplet.

Onde tudo fica funcionando da seguinte forma.
Você aponta o seu registro de dominio para o ip do droplet (no godaddy, ou registro.br);
Na aba Networking do Digital Ocean você adiciona o seu domínio e o vincula ao droplet que você criou.
Dentro do Serverpilot, você cria um app(ou seleciona um previamente criado ), acessa a aba Domains e adiciona o domínio.

Caso precise criar um segundo app dentro do Serverpilot e quiser usar o domínio nele,  basta remover o domínio do app criado anteriormente, e adicionar no novo.

O mesmo vale para subdomínios.

#Wordpress e outros CMSs

O Serverpillot é otimizado para hospedar sites wordpress, constando inclusive com uma opção “one-click install” para sites desse tipo. Mas devido a suas opções de configuração, onde permite inclusive selecionar a versão do PHP desejada para cada app, ele é versátil o suficiente para rodar qualquer aplicação ou CMS baseado em PHP.


Você pode encontrar um tutoral mais detalhado sobre o processo de confirguração no seguinte [link](https://code.tutsplus.com/tutorials/launching-wordpress-at-digital-ocean-with-serverpilot--cms-23276)

Caso queira um cupom de [$10 dolares](https://m.do.co/c/e988e06e6f7d) ( o suficiente para manter um droplet ativo por pelo menos dois meses) basta clicar nesse [link](https://m.do.co/c/e988e06e6f7d)

