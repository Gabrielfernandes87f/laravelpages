@extends('layouts.main')
@section('title', 'welcome')

@section('content')
    <h1>Entendendo a árvore</h1>
    <p>
        Quando criamos um repositório Git, criamos também uma árvore (tree). O código do projeto
        inicial é um branch (galho), e a partir dele é possível criar novos branches, cada branch criado é uma cópia exata do seu branch pai no momento da criação. A criação de novos branches normalmente ocorre quando uma nova alteração no código precisa ser realizada. De modo que as alterações que o desenvolvedor realizar em uma branch serão salvas apenas nesta branch.
        
    </p>
    
    <h1>Commits</h1>
    <p>
        Commit é outra palavra bastante utilizada no universo Git. Quando estamos trabalhando em um branch é possível realizar commits (confirmações de alterações). Quando estes commits são realizados é como se tirássemos uma foto daquela branch naquele momento, a partir de então é possível voltar naquela foto e fazer alterações a partir dela sempre que necessário.
        
    </p>
    <h1>A origem</h1>
    <p>
        Como mencionado anteriormente, o Git é um sistema distribuído, ou seja o desenvolvedor possuirá uma cópia local do repositório em sua máquina. Quando ele fazer alterações e commits no seu repositório essas alterações serão salvas localmente. Para que outros desenvolvedores tenham acesso às essas alterações é necessário enviá-las para a origem, que nada mais é que a cópia original armazenada no seu repositório Git.  
    </p>
    <h1>Merges ou junções</h1>
    <p>
        Quando um desenvolvedor quer reproduzir as alterações de sua branch para outras branches, é necessário que ele faça a junção das branches, conhecido como merge.
    </p>
    <h1>Workflow</h1>
    <p>
        Algo que confunde muitos iniciantes em Git é o conceito de workflow, ou fluxo de trabalho. Não existe regra universal para quando um novo branch deve ser criado, quando o desenvolvedor deve realizar commits ou até mesmo realizar um merge, tudo isso é definido em conjunto pela equipe de desenvolvimento, esse conjunto de regras é chamado de workflow. Então é muito importante procurar entender o workflow da equipe em que se vai trabalhar, só assim o desenvolvedor saberá em qual branch ele deve trabalhar, em qual branch ele vai fazer merge de suas alterações e quando ele deve fazer commits e merges.
    </p>
    
    <h1>Git – O mínimo que você precisa saber para trabalhar em equipe</h1>
    
    <p>
        Está cada vez mais difícil de se falar em projetos de TI sem se falar em versionamento. E, sem dúvidas, está cada vez mais difícil ingressar no mercado sem conhecer tecnologias de versionamento. Dentre as várias tecnologias que um desenvolvedor precisa conhecer, o Git se tornou a tecnologia de versionamento essencial para os programadores de hoje em dia.

        Se você está ingressando no mercado de TI agora, ou já trabalha há algum tempo e ainda não compreendeu como usar essa ferramenta, este artigo é para você.
        
        Aqui vamos trabalhar os conceitos essenciais para que você consiga entender e utilizar o Git minimamente bem para trabalhar num projeto de TI.
    </p>
    
    <h1>Por que Git?</h1>

    <p>
        Git não é o único sistema de controle de versão existente, então porque ele é tão falado e necessário no universo de desenvolvimento de sistemas? Git possui uma arquitetura distribuída, isso significa que todo desenvolvedor tem uma cópia local do projeto em que está trabalhando, e que ele não precisa de acesso a internet para criar seu histórico de alterações.

        Além disso, sua estrutura garante que se minimize os conflitos de código quando mais de um desenvolvedor trabalha no mesmo código. Existem várias outros motivos para o sucesso do Git, mas como esse artigo é sobre o mínimo, vamos encerrar essa sessão por aqui.
    </p>

    <h1>Os termos. # O repositório</h1>
    
    <p>
        Um repositório é onde está armazenado o seu projeto, com todas as suas branches (calma, logo chegamos lá) e arquivos. O repositório fica armazenado em um servidor Git. Geralmente, esse servidor fica na nuvem, em serviços como bitbucket e github. Quando um desenvolvedor vai trabalhar no projeto, ele faz uma cópia local do repositório em sua máquina.
    </p>
    <h1>Entendendo a árvore</h1>
    <p>
        Quando criamos um repositório Git, criamos também uma árvore (tree). O código do projeto
        inicial é um branch (galho), e a partir dele é possível criar novos branches, cada branch criado é uma cópia exata do seu branch pai no momento da criação. A criação de novos branches normalmente ocorre quando uma nova alteração no código precisa ser realizada. De modo que as alterações que o desenvolvedor realizar em uma branch serão salvas apenas nesta branch.
        
    </p>
    
    <h1>Commits</h1>
    <p>
        Commit é outra palavra bastante utilizada no universo Git. Quando estamos trabalhando em um branch é possível realizar commits (confirmações de alterações). Quando estes commits são realizados é como se tirássemos uma foto daquela branch naquele momento, a partir de então é possível voltar naquela foto e fazer alterações a partir dela sempre que necessário.
        
    </p>
    <h1>A origem</h1>
    <p>
        Como mencionado anteriormente, o Git é um sistema distribuído, ou seja o desenvolvedor possuirá uma cópia local do repositório em sua máquina. Quando ele fazer alterações e commits no seu repositório essas alterações serão salvas localmente. Para que outros desenvolvedores tenham acesso às essas alterações é necessário enviá-las para a origem, que nada mais é que a cópia original armazenada no seu repositório Git.  
    </p>
    <h1>Merges ou junções</h1>
    <p>
        Quando um desenvolvedor quer reproduzir as alterações de sua branch para outras branches, é necessário que ele faça a junção das branches, conhecido como merge.
    </p>
    <h1>Workflow</h1>
    <p>
        Algo que confunde muitos iniciantes em Git é o conceito de workflow, ou fluxo de trabalho. Não existe regra universal para quando um novo branch deve ser criado, quando o desenvolvedor deve realizar commits ou até mesmo realizar um merge, tudo isso é definido em conjunto pela equipe de desenvolvimento, esse conjunto de regras é chamado de workflow. Então é muito importante procurar entender o workflow da equipe em que se vai trabalhar, só assim o desenvolvedor saberá em qual branch ele deve trabalhar, em qual branch ele vai fazer merge de suas alterações e quando ele deve fazer commits e merges.
    </p>
    
    <h1>resolvendo conflitos</h1>

    <p>git commit -m "Merge conflict resolution"</p>

    <ul> 
        <h1 style="text-align: center">git merge - no-ff</h1>
        <h2 style="font-size: 16pt">para resolver o erro de merge abaixo use o comado do "git merge - no-ff"</h2>
        <ul>
            <li>
                $ git push -u origin main
                To github.com:Gabrielfernandes87f/laravelpages.git
                ! [rejected]        main -> main (fetch first)
                error: failed to push some refs to 'github.com:Gabrielfernandes87f/laravelpages.git'
                hint: Updates were rejected because the remote contains work that you do
                hint: not have locally. This is usually caused by another repository pushing
                hint: to the same ref. You may want to first integrate the remote changes
                hint: (e.g., 'git pull ...') before pushing again.
                hint: See the 'Note about fast-forwards' in 'git push --help' for details.<br>
                <hr>
                $ git pull
                remote: Enumerating objects: 5, done.
                remote: Counting objects: 100% (5/5), done.
                remote: Compressing objects: 100% (3/3), done.
                remote: Total 3 (delta 2), reused 0 (delta 0), pack-reused 0
                Unpacking objects: 100% (3/3), 670 bytes | 60.00 KiB/s, done.
                From github.com:Gabrielfernandes87f/laravelpages
                    876bfba..9e08480  main       -> origin/main
                hint: Waiting for your editor to close the file...
                
                gabri@DESKTOP-6JO4D7R MINGW64 ~/onedrive/documentos/laravelpages (main|MERGING)
                Merge made by the 'recursive' strategy.
                git merge - no-ff
                merge: - - not something we can merge
            </li>
        </ul>
    </ul>
    <h2> para resolver outros conflitos de merge</h2>

    <a href="https://www.geeksforgeeks.org/merge-strategies-in-git/" style="color: black"> entre no site para saber mais sobre merge</a>

@endsection