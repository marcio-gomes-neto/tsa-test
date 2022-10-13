# Orientações

O teste de seleção é a criação de um pequeno CRUD de uma lista de postagem, além da amostragem de dados de um usuário. Para popular os dados que serão utilizados, você contará com a utilização da API pública [{JSON} Placeholder](https://jsonplaceholder.typicode.com/). Através dela, você terá disponível os dados e recursos necessários para realizar a atividade. O Objetivo do teste é analisar o consumo de uma API.

Critérios de avaliação:

- Clareza e boas práticas de desenvolvimento utilizando JavaScript, de preferência ECs6 ou superior.
- Organização do código
- Aplicação do Framework [Vue.Js](https://vuejs.org/) e seus pacotes, como o [Vue Router](https://router.vuejs.org/), e suas boas práticas.
- Conceito de SPA - Single Page Application e Two Way Data Binding.
- Estilização e conhecimentos de responsividade. 
>O teste deverá ser feito preferencialmente em Vue.Js, os métodos de estilização podem ser diversos, ex: CSS, SCSS, LESS, Bootstrap e etc. A título de auxílio, será disponibilizado a seguir materiais para auxílio da execução do teste:

Auxílio:
--
Cores e estilizações utilizadas: 
#009BDE
#0379AB
#004563
#78D7FF
#DFDFDF
#004563
box-shadow : 0px  4px  4px  rgba(0, 0, 0, 0.25);
font-family: Roboto

Os ícones utilizados foram retirados do repositório [Material Icons](https://materialdesignicons.com/), sendo os ícones:
- mdi-trash-can-outline
- mdi-pencil-outline 

API
--
**[Guia de Uso](https://jsonplaceholder.typicode.com/guide/)** 

Usuários e seus dados: https://jsonplaceholder.typicode.com/users
Lista de postagem: https://jsonplaceholder.typicode.com/posts/userId/comments
>As rotas a seguir não editam ou deletam de verdade um post, porém ao chamá-las elas te retornam o post que foi modificado. Entenda em: [{JSON} Placeholder](https://jsonplaceholder.typicode.com/guide/)

POST /posts
PUT /posts/1
PATCH/posts/1
DELETE/posts/1

Para a criação e o update dos dados, pode ser feito um mock com os dados e modificados, ou seja, modificar os dados resultantes da listagem de posts sem utilizar a chamada da API.