**Não usar getter e setters**
 - Utilizar métodos de acesso a nossas propriedades faz sentido, desde que nós não utilizemos o retorno para tomar decisões que poderiam estar encapsuladas na classe.

 - Evite usar setters sempre que possível. Dessa forma você terá objetos imutáveis, ou seja, que não sofrem alteração. Esta técnica ajuda bastante na previsibilidade de seu código.

  - Não devemos expor detalhes de implementação (isso é encapsulamento).


**Ter apenas 1 nível de identação por método**
**NUNCA use ELSE**
Você pode usar early return. ou modificar sua estrutura(desde que não afete as regras de negócio) com um fail-fast por exemplo, para que o else deixe de ser necessário.

Existe uma métrica muito famosa para saber quão complexo nosso código está. O nome desta métrica é Complexidade Ciclomática.

O cálculo dessa métrica é relativamente complexo, mas basicamente, quanto mais ifs e elses, mais complexo nosso método. Esse cálculo nos diz quantos possíveis caminhos nosso código pode percorrer.

Ao evitar o uso de else, nós escrevemos códigos com uma Complexidade Ciclomática menor, deixando menos “bifurcações” em nosso código, o que facilita a leitura.


**Envolva TODOS os seus tipos primitivos**
Você pode, para reduzir complexidade, envolver somente os tipos primitivos que tenham comportamento.


**Coleções de primeira classe**
Se eu tenho uma coleção, a unica propriedade da minha classe deve ser essa coleção.
_Tenha classes específicas de coleção_


**Apenas um ponto por linha**
"basicamente" não se deve falar com estranhos, não entrar fundo em um objeto, para manter a classe aberta para expansão mas fechada para modificação.

_Fluent Interface não entra nessa regra_

**NUNCA abrevie JAMAIS**
Existem 2 casos onde você pode se sentir tentado a abreviar:
Se isso se repete em muitas partes do código:
Então você vai querer isolar.


Se esse método tem o nome muito grande:
Se seu método faz mais de uma coisa ou é muito específico, pode ser refatorado.

