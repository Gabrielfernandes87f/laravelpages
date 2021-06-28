@extends('layouts.main')

@section('title', 'welcome')

@section('content')

<h1>Git na prática: comandos</h1>
<p>
    Nesta seção, vamos para a parte prática de Git. Aqui listei alguns dos comandos mais utilizados no dia a dia de um programador.
</p>

<h1>Git init</h1>
<p>
    Para começar a trabalhar com Git, você precisa inicializar um diretório Git na sua máquina local, para isso é necessário executar o comando “$ git init”. Este comando irá criar a estrutura Git dentro do diretório em que foi executado.
</p>
<h1>Git clone</h1>
<p>
    Na maioria das vezes você irá começar a trabalhar com os arquivos de um repositório remoto já existente. Para copiar os arquivos do servidor remoto para sua máquina local execute o comando ​“$ git clone ​https://usuario@enderecoRemoto.com/repositorio.git​”   
</p>
<h1>Git fetch</h1>
<p>
    Esse é um comando muito utilizado, mas que, por vezes, as pessoas não entendem o que ele faz. O comando git fetch traz do repositório remoto todas informações sobre ele que ainda não estão no seu repositório local. Um detalhe muito importante: o comando git fetch NÃO incorpora essas mudanças, ou seja não realiza um merge.

    Quando você cria branches diretamente no servidor remoto é necessário que você execute o comando git fetch para ter acesso à esses branches localmente. Normalmente é necessário apenas executá-lo como ​“$ git fetch”
</p>
<h1>Git checkout: trocando a sua branch</h1>
<p>
    O comando utilizado para trocar de branch em que você está trabalhando. Uma rotina comum é criar uma nova branch para trabalhar em um determinada funcionalidade, utilizar o comando fetch para buscá-la da origem e então usar o comando ​“$ git checkout nome-da-branch” para começar a trabalhar na sua nova branch.
</p>
<h1>Git add</h1>
<p>
    Para fazer um commit e salvar aquele snapshot do seu trabalho é necessário antes adicionar suas alterações na staging area. Este é um local de trabalho, onde você pode colocar os arquivos que realmente deseja adicionar no commit, assim você pode particionar melhor seu trabalho e organizar melhor seus commits. Para adicionar todos os arquivos alterados e novos arquivos na staging area use o comando ​“$ git add .”​, caso queira adicionar arquivos específicos utilize o comando ​“$ git add nome-do-arquivo.txt nome-do-arquivo2.txt”​.

    E agora um detalhe muito importante: caso você deseja adicionar na staging area, além das alterações e novos arquivos, as deleções que realizou, você deve utilizar o comando ​“$ git add -A”.
</p>
<h1>Git commit: salvando um snapshot</h1>
<p>
    Na prática, para se realizar um commit é necessário que você tenha arquivos na sua staging area. Uma vez que os arquivos estão lá basta você utilizar o comando ​“$ git commit” para salvar a “fotografia” do seu código. Uma vez que você executa este comando é gerado um commit com um código identificador único. Você pode utilizar o comando git checkout com o código gerado para voltar naquele snapshot do seu programa.
</p>
<h1>Git pull: buscando alterações remotas</h1>
<p>
    Uma vez que você fez alterações no seu código e criou seus commits você precisa que os outros desenvolvedores tenham acesso a essas alterações. Lembre que até o momento tudo o que você fez foi na cópia do seu repositório na sua máquina local.

    Para que você envie suas alterações para a origem você precisa antes verificar se o repositório remoto sofreu alterações de outras pessoas desde que você começou a trabalhar naquela branch, e caso haja alterações você precisa trazê-las para o seu código. O comando utilizado para isso é o comando ​ “$ git pull”​.
    
    Quando você realiza um pull, o Git vai buscar as alterações de código dos outros desenvolvedores e tentar fazer o merge daquelas alterações no seu código. Caso o Git não consiga fazer o merge automático ele marcará as seções do código onde há conflito e você precisará juntar os código manualmente, indicando se vai utilizar as alterações que vieram da origem, as suas alterações locais, ambas ou até mesmo mesclar as duas. Uma vez que terminar de realizar o merge, faça um git add e depois um commit para salvar essas alterações. Esse processo é um pouco traumático para muitos desenvolvedores, então muita calma na hora de realizar um pull.

    Se houver conflitos, não se desespere, faça o merge com calma e lembre-se: os pulls são reversíveis. Caso aconteça algum problema, seu código não está perdido: é sempre possível voltar no commit anterior ao pull.
</p>

<h1>Git push: fazendo o upload</h1>

<p>
    Você realizou seu pull, agora sua branch está alinhada com a branch na origem e você finalmente pode fazer upload das suas alterações. Para fazer esse upload use o comando ​“$ git push origin nome-da-branch” .
</p>

<h1>Git merge: finalizando seu trabalho</h1>

<p>
    Uma vez que você finalizou seu trabalho num branch você precisa fazer a junção dela com sua branch de origem para que suas alterações sejam incluídas no projeto em si. Para realizar esse merge é necessário que você antes faça um pull da branch com a qual você deseja fazer a junção para a sua, assim você resolverá os conflitos entre as duas. Para fazer esse pull, utilize o comando “$ git pull branch-de-origem sua-branch”. Uma vez que as branches foram alinhadas, faça um checkout para a branch de origem com o comando ​“$ git checkout branch-de-origem” ​e então efetive o merge com o comando ​“$ git merge sua-branch”. Pronto a junção foi realizada e suas alterações já estão na branch principal.
</p>

<h1>Git stash</h1>

<p>
    Um grande ponto diferencial do Git como tecnologia de versionamento é a existência da área de stash. Essa é uma técnica muito poderosa do Git mas que poucos desenvolvedores fazem uso. Por vezes, é possível que você comece a desenvolver uma nova atividade em uma branch e depois de algumas dezenas de linhas de código você percebe que está trabalhando na branch errada.

    Para contornar esta situação, você pode fazer uso da stash, que é uma área lógica do Git que você pode utilizar para salvar alterações que você ainda não deseja commitar. Utilize o comando ​“$ git stash” ​para adicionar as alterações que você fez na área de stash. A partir de então você pode aplicar aquelas alterações em qualquer branch que você quiser fazendo um checkout para a branch na qual você deseja trabalhar e utilizando o comando ​“$ git stash apply”​.
</p>

<h1>Conclusões</h1>

<p>
    Enfim, estes são os conceitos e comandos básicos para que você comece a trabalhar em uma equipe de desenvolvedores. Utilize muito essa tecnologia e treine bastante os comandos que aprendeu aqui. Acima de tudo, não se esqueça de fazer commits frequentes para ter seu trabalho salvo sempre
</p>

@endsection