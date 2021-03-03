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

- `Error` é somente para desenvolvimento interno do php, não criamos/extendemos Error
- `Exceptions` podem ser criadas/extendidas para regras de negócio da aplicação.
