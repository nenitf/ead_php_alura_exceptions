# ead_php_alura_exceptions

> Projeto referente a [este](https://cursos.alura.com.br/course/php-exceptions-tratamento-erros) curso.

## Execução dos scripts

- Terminal com `php nomedoarquivo.php`
- Vim com `:!php %`
- Browser com servidor embutido
    1. Levantar servidor pelo terminal com `php -S localhost:8001`
    2. Acessar em `localhost:8001/nomedoarquivo.php`

## Explicações interessantes

```txt
             +-------------+
        +--->|<<interface>>|<------+
        |    |  Throwable  |       |
        |    +-------------+       |
        |                          |
   +----+----+                  +--+--+
   |Exception|          +------>|Error|<------------------+
   +---------+          |       +-----+                   |
                        |         ^  ^                    |
                        |         |  |                +---+-----+
                        |         |  |                |TypeError|
                        |         |  |                +---------+
                        |         |  |           +----------------------+
                        |         |  +-----------+    CompileError      |
                        |         |              |(..., ParseError, ...)|
                        | +-------+------+       +----------------------+
                        | |AssertionError|
                        | +--------------+
                        |
                       ++------------------------------+
                       |        ArithmeticError        |
                       |(..., DivisionByZeroError, ...)|
                       +-------------------------------+
```

- `Error` é somente para desenvolvimento interno do php, não criamos/extendemos erros.
- `Exceptions` podem ser criadas/extendidas para regras de negócio da aplicação.

### Exceptions builtin

> [Exceções](https://www.php.net/manual/pt_BR/spl.exceptions.php) que já vem com o php

- `LogicException` mal uso da linguagem
    - Foi recomendada `DomainException` para exceções de regra de negócio ([link](https://www.php.net/manual/pt_BR/class.domainexception.php)), mas não sei se faz muito sentido pois parece ter mais haver quando tratamos somente parâmetros de funções ([exemplo](https://www.php.net/manual/pt_BR/class.domainexception.php#106241))
- `RuntimeException` só pode ser encontrado durante a execução
