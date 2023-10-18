# **Projeto de Desenvolvimento de Site de Controle de Preços**

## **Resumo**

Neste projeto, iremos criar um pequeno site para armazenar dados de produtos de supermercado. Para atender aos requisitos, você precisará criar os seguintes arquivos:

1. **Página de Login**
   - Crie um formulário inicial chamado `login.php` que será a tela de login, onde o usuário digita o seu login e senha. Caso estejam corretos, o usuário poderá ter acesso ao arquivo `menu.php`.

   Exemplo do formulário de login:
   ![Exemplo de formulário de login](https://exemplo/imagem.png)

   Não se esqueça de deixar anotado o login e senha a ser utilizado pelo tutor na correção.

2. **Página de Menu**
   - Crie o arquivo `menu.php` para fazer a interface principal do sistema, que será o menu de acesso às opções de cadastro e listagem de produtos, estabelecimentos e preços.

3. **Estilização com CSS**
   - Utilize pelo menos um arquivo CSS de sua própria autoria com pelo menos 5 configurações de estilo, mas você pode personalizar mais elementos conforme necessário.

4. **Banco de Dados ou Session**
   - Utilize um Banco de Dados para armazenar os dados cadastrados. Recomenda-se o uso do XAMPP para fazer testes. Se não conseguir usar o banco de dados, use o recurso de "session" do PHP.

5. **Cadastro de Produtos**
   - Crie um formulário HTML para cadastrar os dados de um produto, incluindo:
     - Nome do produto;
     - Marca;
     - Tamanho/quantidade (em gramas, ml, etc).

6. **Listagem de Produtos**
   - Faça uma listagem para mostrar todos os produtos cadastrados, utilizando PHP para buscar os dados no banco de dados ou na sessão do navegador.

7. **Cadastro de Estabelecimentos**
   - Crie um formulário HTML para cadastrar os dados de um estabelecimento, incluindo:
     - Nome fantasia;
     - Endereço;
     - Cidade;
     - Número de lojas.

8. **Cadastro de Preços**
   - Crie um formulário HTML para cadastrar o preço de um produto em um estabelecimento. Produtos e estabelecimentos devem ser escolhidos via Combobox, trazidos dos cadastros anteriores.

9. **Listagem de Preços Mais Baratos**
   - Faça uma nova listagem que permita escolher um estabelecimento e então mostre apenas os produtos que estão mais baratos naquela loja. Se o produto estiver cadastrado em apenas um estabelecimento, e este for o escolhido, ele deve ser mostrado. Se o produto estiver cadastrado em diversos estabelecimentos, ele só deve ser mostrado naquele no qual seu preço seja o menor.

10. **Anexar Imagens**
    - Anexe uma imagem (foto) de cada formulário/relatório que você desenvolveu (printscreen do resultado que aparece no seu browser, incluindo a aplicação do CSS) para mostrar o resultado que você alcançou para o tutor. Também anexe prints das tabelas criadas no MySQL.

**Dicas Importantes:**

- A resposta deve ser na forma de uma ou mais páginas HTML/PHP/CSS/JS, conforme os exemplos vistos durante a disciplina.
- As ferramentas utilizadas nas aulas estão especificadas no livro texto da disciplina.
- Poste a URL do sistema produzido na nuvem ou disponibilize a pasta dos arquivos via link público (Azure, Google Drive, OneDrive, Dropbox, etc.) e coloque o link na caixa de resposta da avaliação.
- Revise os estudos de caso do Capítulo 9 e 10 do livro da disciplina.
- Você deve construir as páginas do lado do cliente usando HTML, CSS e JavaScript; e as páginas do lado do servidor usando PHP.
- Estude o PDO do PHP para trabalhar com banco de dados. Se não conseguir usar o banco de dados, use o recurso de "session" do PHP.

Boa sorte com o projeto!
