Com a alta constante dos preços dos alimentos, se tornou muito importante fazer pesquisas para se determinar o local onde o preço se encontra mais barato antes de se fazer uma compra.

Agora é com você. Vamos fazer um pequeno site para armazenar dados de produtos de supermercado. Para responder o que está sendo pedido, faça um ou mais arquivos HTML, CSS e programas em Linguagem PHP.

RESUMO

Página de Login
Página de menu com as seguintes opções:
Cadastro e listagem de produtos
Cadastro e listagem de estabelecimento
Listagem dos preços mais baratos
DETALHADO

A) Crie um formulário inicial chamado: login.php que será a tela de login, onde o usuário digita o seu login e senha. Caso estejam corretos o usuário poderá ter acesso ao arquivo menu.php (item B).

Veja um exemplo, na figura abaixo, de como o resultado pode ser apresentado:

 

Não se esqueça de deixar anotado o login e senha a ser utilizado pelo tutor na correção.

B) Crie o arquivo menu.php, para fazer a interface principal do sistema, que será o menu de acesso às opções de cadastro e listagem, que inclui os itens criados nas letras E, F, G, H e I da avaliação. Crie novas opções no menu conforme for a sua necessidade.

C) Utilize pelo menos um arquivo CSS de sua própria autoria. Umas 5 configurações são o mínimo necessário, mas você pode optar por configurar muitas coisas de suas telas.

D) Utilize um Banco de Dados para armazenar os dados cadastrados. Para fazer este item você precisa instalar o XAMPP na sua máquina para fazer os devidos testes. Se não conseguir usar o banco de dados, use o recurso de “session” do PHP.

É possível utilizar outro SGBD, desde que seja indicado no campo da prova para o tutor que fará a correção.

E) Crie um FORMULÁRIO (FORM do HTML) para cadastrar os dados de um produto. Cada produto deve conter:

Nome do produto;
Marca;
Tamanho/quantidade (em gramas, ml, etc);
Pré-cadastre, no mínimo, 10 produtos, no seu Banco de Dados. Procure cadastrar alguns produtos que você utiliza no seu cotidiano.

F) Faça uma LISTAGEM para mostrar todos os produtos que você cadastrou no item E. A listagem deve ser feita utilizando a linguagem PHP e buscando os dados no banco de dados (ou sessão do navegador).

G) Crie um FORMULÁRIO para cadastrar os dados de um estabelecimento. Cada estabelecimento deve conter:

Nome fantasia
Endereço
Cidade
Número de lojas
Pré-cadastre, no mínimo, 4 estabelecimentos, no seu Banco de Dados.

H) Crie um FORMULÁRIO para cadastrar o preço de um produto em um estabelecimento. Produtos e estabelecimentos devem ser escolhidos via Combobox, trazidos dos cadastros anteriores.

I) Faça uma nova LISTAGEM que permita escolher um estabelecimento e então mostre APENAS os produtos que estão mais baratos naquela loja. Se o produto estiver cadastrado em apenas um estabelecimento, e este for o escolhido, ele deve ser mostrado. Se o produto estiver cadastrado em diversos estabelecimentos, ele só deve ser mostrado naquele no qual seu preço seja o menor.

J) Anexe uma imagem (foto) de cada formulário / relatório que você desenvolveu (printscreen do resultado que aparece no seu browser, incluindo aplicação do CSS), para mostrar o resultado que você alcançou para o tutor. Anexe prints das tabelas criadas no MySQL também. Este recurso será utilizado quando o tutor não conseguir reproduzir sua Base de Dados no XAMPP local dele.

As imagens podem ficar na pasta principal do projeto.

Dicas:

A resposta deve ser na forma de uma ou mais páginas html/php/css/js, conforme os exemplos vistos durante a disciplina.
As ferramentas utilizadas nas aulas você encontra especificada no livro texto da disciplina.
Postar a URL do sistema produzido, na nuvem. Pode disponibilizar a pasta dos arquivos via link (público) por meio das plataformas Azure, Google Drive, OneDrive, Dropbox, etc. e colocar o link na caixa de resposta da avaliação. Não se esqueça de dar permissão total para seus arquivos (ou sua pasta).
Revise os estudos de caso do Capítulo 9 e 10 do livro da disciplina.
Você deve construir as páginas do lado do cliente usando HTML, CSS e JavaScript; e as páginas do lado do servidor usando PHP.
Estude o PDO do PHP para trabalhar com banco de dados. Se não conseguir usar o banco de dados, use o recurso de “session” do PHP.
