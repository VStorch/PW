## Jogue todos níveis do flex frog  explique e descreva a solução de 2 níveis,  acima da questão 10, explicando cada uma das propriedades utilizadas e o efeito que elas tem.


#### 15)
**R:**
_order: -1;_

Define o id "red" como sendo de prioridade superior a dos demais elementos. Por isso, ao receber -1, o sapinho vermelho vai na frente dos demais.

#### 24)
**R:**
_flex-direction: column-reverse;
flex-wrap: wrap-reverse;
align-content: space-between;
justify-content: center;_

**flex-direction: column-reverse =** Alinha os sapos em coluna, e inverte a ordem deles nesse sentido.<br>
**flex-wrap: wrap-reverse =** Ajusta o espaço ocupado pelos sapos para eles não ficarem "esmagados", esta é a função do wrap. Já o fato dele estar especificado como _reverse_, faz com que eles sejam ajustados no outro sentido, o que faz com que os sapos amarelos fiquem no lado esquerdo.<br>
**align-content: space-between =** Afasta as duas colunas, as colocando nas extremidades opostas.<br>
**justify-content: center =** Centraliza as colunas, o que deixa os sapos amarelos no espaço desejado.