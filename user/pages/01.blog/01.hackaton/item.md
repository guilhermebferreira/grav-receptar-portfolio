---
title: Horta Urbana e o 2ª Hackaton da Faculdade Catolica
date: 16:40 08/05/2017
taxonomy:
    category: artigos
    tag: [eventos, hackaton]


---

![Hackaton da Católica](https://cloud.githubusercontent.com/assets/5393392/25824280/2998a160-3415-11e7-8f32-7a7060723994.png)

## O tema

Seguindo os passos do [The Big Hackaton](http://www.br.undp.org/content/brazil/pt/home/presscenter/articles/2017/02/01/the-big-hackathon-ter-o-desafio-de-apresentar-solu-es-tecnol-gicas-aos-ods.html), os participantes deveriam trabalhar em soluções que colaborassem para resolver os [17 desafios globais](http://www.globalgoals.org/pt/)

Sendo eles:

1. Erradicar a pobreza
2. Erradicar a fome
3. Saúde de qualidade
4. Educação de qualidade
5. Igualdade de género
6. Água potável e saneamento
7. Energias Renováveis e Acessíveis
8. Trabalho Digno e Crescimento Económico
9. Indústria, inovação e infraestruturas
10. Reduzir as desigualdades
11. Cidades e comunidades sustentáveis
12. Produção e Consumo Sustentáveis
13. Ação Climática
14. Proteger a Vida Marinha
15. Proteger a Vida Terrestre
16. Paz, Justiça e Instituições Eficazes
17. Parcerias para a Implementação dos Objetivos


## O evento

Esse foi o segundo Hackaton realizado pela Faculdade Católica do Tocantins. A primeira edição era dedicada completamente ao desenvolvimento mobile.
Este ano eles resolveram abrir mais o leque, contando que não fosse utilizadas ferramentas pagas no desenvolvimento das soluções.

Foram cerca de 28 inscritos, que se dividiram em equipes com dois participantes (com algumas poucas exceções).

O Evento foi planejado para pouco mais de 12 horas duração. Começando as 19h com uma palestra de apresentação do tema, seguindo de 12 horas para desenvolvimento e finalizando na parte da manhã com cada equipe apresentando os resultados da madrugada de trabalho.

Mas devido a atrasos, e a uma mudança na programação que colocou uma palestra da Semana de Tecnologia antes da palestra de abertura do Hackaton, o inicio das atividades que estava previsto para às 20h foi adiado para depois das 21h

![Talles Moura fazendo a apresentação do tema do evento](https://cloud.githubusercontent.com/assets/5393392/25823599/f946e56e-3412-11e7-82bc-3e306e25a0f7.jpg)

Após as palestras, todos foram encaminhados para duas salas com bastante tomadas e um suprimento de café e energético que era renovado regularmente.

Parte da organização se disponibilizou para dar mentoria durante a maior parte do evento, tanto em relação a dúvidas técnicas que surgiam durante o desenvolvimento quanto para ajudar a validar a ideia dentro do tema dos desafios globais.

## O desenvolvimento da aplicação

Formei dupla com um amigo de longa data, o Luiz Carvalho, e conseguimos formar uma boa dupla apesar de nunca termos trabalhado juntos.

Dedicamos as primeiras horas do evento a ler o quanto fosse possível sobre o tema e com isso imaginar possíveis app’s e soluções.

<!-- more -->


Depois escolhemos as melhores ideias e procuramos os mentores para validar qual das duas valia mais a pena desenvolver. Com isso começamos a trabalhar a ideia do Horta Urbana.

O primeiro rascunho que fiz do modelo de entidade relacional para o backend da aplicação tinha pelo menos 10 tabelas. E o Luiz Carvalho precisou me convencer que era uma proposta inviável para implementarmos nas 12 horas do evento.

![Primeiro rascunho das entidades](https://cloud.githubusercontent.com/assets/5393392/25823476/990036d8-3412-11e7-90ad-41208a8fc866.png)

Sendo assim trabalhamos em reduzir a ideia ao seu produto mínimo viável e reduzir a quantidade de tabelas do backend para apenas QUATRO.


![Projeto reduzido ao seu mvp](https://cloud.githubusercontent.com/assets/5393392/25823475/98fdabca-3412-11e7-80ef-67d640154431.png)

A interface com o cliente final foi trabalhada como chatbot, dessa forma dispensava a instalação de novos aplicativos e ainda tornava o cadastro de novos usuários algo transparente devido a integração com o Facebook.

## O Horta Urbana

O Horta Urbana foi pensado como uma ferramenta para promover o consumo de verduras e hortaliças dos produtores locais. Que normalmente escoam suas produções por meio das feiras. 

No lado do cliente o Horta Urbana seria apresentado como um serviço de assinatura, onde o cliente escolheria uma das opções disponíveis, cadastraria seu endereço e a forma de pagamento, e receberia em casa suas verduras semanalmente (ou 2x por semana de acordo com a periodicidade contratada).

O painel administrativo, e sua REST api, seria responsável por:
Cadastrar uma nova assinatura
Realizar o cadastro transparente de um novo usuário
Atualizar a demanda por cada verdura/hortaliça
Controlar a relação oferta x demanda
Quando novos pedidos chegassem, a assinatura ficaria pendente até que o administrador encontrasse produtores para supri-la
Isso poderia ser realizado com o cadastro de novos produtores ou com o aumento da cota de produção dos produtores já cadastrados
Administrar o pagamento da assinatura
No MVP optamos por pagamento a vista por meio de depósito bancário
A assinatura ficará pendente até que o administrador confirmasse o pagamento
Administrar as entregas
Através de relatórios, estaria a disposição do administrador os totais de cada tipo de verdura que seria necessário para suprir as demandas do dia
O administrador teria acesso a quantidade que deveria ser fornecida por cada um dos produtores
O administrador teria acesso a uma lista com endereço de entrega e com os detalhes do conteúdo do pacote que deverá ser entregue para cada cliente

Já o chatbot, utilizado como interface com o cliente:
Exibia as opções de pacotes disponíveis para assinatura
Cadastrar  novas assinaturas por meio da REST api
Recebia os comprovantes de pagamento e os enviava para o administrador do Horta Urbana
Exibia para o cliente o status da assinatura

![Nós e mais algumas equipes produzindo madrugada a dentro](https://cloud.githubusercontent.com/assets/5393392/25823625/0a2ec4e6-3413-11e7-9a19-cc33fe9c357d.jpg)

Com o escopo reduzido conseguimos disponibilizar uma versão funcional da aplicação (Chatbot e interface administrativa). E por volta das cinco da manhã começamos a nos dedicar apenas aos slides da apresentação.

Quem tiver a curiosidade de ver o resultado pode acessar o chatbot através da página do Horta Urbana no [facebook](https://www.facebook.com/Horta-Urbana-1295410903900087/?fref=ts), iniciar uma conversa a partir desse [link](http://bit.ly/hurbana) e ainda inspecionar o código do backend nesse [repositório](https://github.com/guilhermebferreira/horta-urbana).

# Resultado

O atraso no início do evento foi prejudicial para todas as equipes, pois perdemos algumas horas no início da noite e as horas adicionadas à parte da manhã não foram muito produtivas já que todo mundo estava cansado.

Duas equipes desistiram durante o evento, e apenas 12 duplas ficaram até a apresentação.

As apresentações e a análise dos trabalhos também parecem ter consumido tempo demais, já que o evento iniciou às 19h da noite, o período de desenvolvimento acabou às 9h da manhã do dia seguinte mas o encerramento do evento aconteceu quase meio dia.

E apesar do evento ser um Hackaton, a impressão que ficou foi de que a implementação das soluções ficaram em segundo plano durante as avaliações dos jurados. Também não foram cobrados dos participantes a disponibilização dos trabalhos em repositórios públicos (ou pelo menos não fiquei sabendo da lista compilando tudo)
