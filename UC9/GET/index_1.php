<?php

/*
Este é um exemplo muito simples do que pode ser uma API com vários endpoints,
mas sem qualquer mecanismo de autenticação e sem controlo de erros.
Vamos apenas seguir os seguintes princípios:

1. Qualquer cliente pode acessar aos endpoins através da URL;
2. Cada endpoint deve responder no formato JSON;

http://localhost/04/api/get_status
http://localhost/04/api/get_all_animals
http://localhost/04/api/get_animals
http://localhost/04/api/get_animals/?max=5
*/