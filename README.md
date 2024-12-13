# Microblog

Versão simplificada do site dinâmico usada como exemplo das aulas de programação web.

Tecnologias: HTML5, CSS3, Bootstrap 5, PHP e banco de dados MySQL

## Sobre as áreas do site

### PÚBLICA

Páginas que **não precisam de autenticação** para o acesso.

São as páginas na raíz do projeto: 

- index
- noticia
- login
- resultados


### ADMINISTRATIVA

Páginas que **precisam de autenticação** para o acesso, sendo que algumas delas tem privilégios de acesso diferenciado.

São as páginas contidas na pasta **admin** do projeto: 

- index
- meu-perfil
- usuarios
- usuario-insere
- usuario-atualiza
- usuario-exclui
- noticias
- noticia-insere
- noticia-atualiza
- noticia-exclui
- nao-autorizado

#### Privilégios de acesso

Usuários do tipo **admin**, podem acessar/modificar **TUDO**.

Usuários do tipo **editor**, podem acessar/modificar **somente** seus próprios dados e suas próprias notícias. 

Ou seja, **não podem** por exemplo, administrar outros usuários.

