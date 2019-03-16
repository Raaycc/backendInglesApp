<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalavrasNoBancoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "among",
            "traducao" => "entre"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "against",
            "traducao" => "de encontro"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "away",
            "traducao" => "afastado"
        ]);
        
        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "being",
            "traducao" => "sendo"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "came",
            "traducao" => "veio"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "better",
            "traducao" => "melhor"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "come",
            "traducao" => "vindo"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "could",
            "traducao" => "poderia, ser capaz de"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "even",
            "traducao" => "mesmo, até"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "ever",
            "traducao" => "sempre"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "eyes",
            "traducao" => "olhos"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "face",
            "traducao" => "cara"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "far",
            "traducao" => "distante"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "few",
            "traducao" => "poucos"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "gave",
            "traducao" => "deu, dar"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "give",
            "traducao" => "dar, fornecer"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "got",
            "traducao" => "obteve"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "had",
            "traducao" => "teve"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "hand",
            "traducao" => "mão"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "however",
            "traducao" => "entretanto"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "just",
            "traducao" => "apenas"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "less",
            "traducao" => "menos"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "let",
            "traducao" => "deixar"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "made",
            "traducao" => "feito"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "make",
            "traducao" => "fazer"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "may",
            "traducao" => "maio, poder"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "might",
            "traducao" => "poderia, poder"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "must",
            "traducao" => "obrigação, dever"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "once",
            "traducao" => "uma vez"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "own",
            "traducao" => "possuir, próprio"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "perhaps",
            "traducao" => "possivelmente, talvez"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "same",
            "traducao" => "mesmos"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "saw",
            "traducao" => "serra"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "seemed",
            "traducao" => "pareceu"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "shall",
            "traducao" => "deve"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "since",
            "traducao" => "desde, desde que"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "some",
            "traducao" => "algum, alguma"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "son",
            "traducao" => "filho"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "still",
            "traducao" => "ainda"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "tell",
            "traducao" => "dizer"
        ]);

        app(\App\Services\PalavrasService::class)->adicionar([
            "palavra" => "tell",
            "traducao" => "dizer"
        ]);

        $palavras = json_decode('[
            { "palavra" : "tell" ,
                    "traducao" : "dizer" },
                
                { "palavra" : "themselves" ,
                    "traducao" : "eles mesmos" },
                
                { "palavra" : "things" ,
                    "traducao" : "coisas" },
                
                { "palavra" : "think" ,
                    "traducao" : "pensa" },
                
                { "palavra" : "though" ,
                    "traducao" : "embora" },
                
                { "palavra" : "thought" ,
                    "traducao" : "pensamento" },
                
                { "palavra" : "through" ,
                    "traducao" : "através" },
                
                { "palavra" : "thus" ,
                    "traducao" : "assim" },
                
                { "palavra" : "took" ,
                    "traducao" : "fez exame" },
                
                { "palavra" : "war" ,
                    "traducao" : "guerra" },
        
                { "palavra" : "went" ,
                    "traducao" : "foram" },
                
                { "palavra" : "whole" ,
                    "traducao" : "inteiro" },
                
                { "palavra" : "would" ,
                    "traducao" : "futuro condicional" },
                
                { "palavra" : "yet" ,
                    "traducao" : "ainda" },
        
                { "palavra" : "age" ,
                    "traducao" : "idade" },
                
                { "palavra" : "all" ,
                    "traducao" : "tudo" },
                
                { "palavra" : "also" ,
                    "traducao" : "também" },
                
                { "palavra" : "always" ,
                    "traducao" : "sempre" },
                
                { "palavra" : "am" ,
                    "traducao" : "am" },
        
                { "palavra" : "and" ,
                    "traducao" : "e" },
                
                { "palavra" : "another" ,
                    "traducao" : "outros" },
                    
                { "palavra" : "back" ,
                    "traducao" : "voltar" },
        
                { "palavra" : "been" ,
                    "traducao" : "particípio passado to be" },
                
                { "palavra" : "before" ,
                    "traducao" : "antes" },
                
                { "palavra" : "between" ,
                    "traducao" : "entre" },
                
                { "palavra" : "body" ,
                    "traducao" : "corpo" },
                
                { "palavra" : "both" ,
                    "traducao" : "ambos" },
                
                { "palavra" : "called" ,
                    "traducao" : "chamada" },
                
                { "palavra" : "case" ,
                    "traducao" : "caso" },
                
                { "palavra" : "city" ,
                    "traducao" : "cidade" },
                
                { "palavra" : "country" ,
                    "traducao" : "pais" },
                
                { "palavra" : "day" ,
                    "traducao" : "dia" },
                
                { "palavra" : "days" ,
                    "traducao" : "dias" },
                
                { "palavra" : "first" ,
                    "traducao" : "primeiro" },
                
                { "palavra" : "five" ,
                    "traducao" : "cinco" },
                
                { "palavra" : "found" ,
                    "traducao" : "encontrado" },
                
                { "palavra" : "four" ,
                    "traducao" : "quatro" },
                
                { "palavra" : "from" ,
                    "traducao" : "de" },
                
                { "palavra" : "get" ,
                    "traducao" : "pegar" },
                
                { "palavra" : "go" ,
                    "traducao" : "ir" },
                
                { "palavra" : "god" ,
                    "traducao" : "deus" },
                
                { "palavra" : "going" ,
                    "traducao" : "indo" },
                
                { "palavra" : "good" ,
                    "traducao" : "bom" },
                
                { "palavra" : "having" ,
                    "traducao" : "tinha" },
                
                { "palavra" : "head" ,
                    "traducao" : "cabeça" },
                
                { "palavra" : "heart" ,
                    "traducao" : "coração" },
                
                { "palavra" : "here" ,
                    "traducao" : "aqui" },
                
                { "palavra" : "house" ,
                    "traducao" : "casa" },
                
                { "palavra" : "how" ,
                    "traducao" : "como" },
                
                { "palavra" : "hundred" ,
                    "traducao" : "cem" },
                
                { "palavra" : "if" ,
                    "traducao" : "se" },
                
                { "palavra" : "king" ,
                    "traducao" : "rei" },
                
                { "palavra" : "know" ,
                    "traducao" : "saber" },
                
                { "palavra" : "life" ,
                    "traducao" : "vida" },
                
                { "palavra" : "light" ,
                    "traducao" : "luz" },
                
                { "palavra" : "little" ,
                    "traducao" : "pouco" },
                
                { "palavra" : "long" ,
                    "traducao" : "longo" },
                
                { "palavra" : "look" ,
                    "traducao" : "olhar" },
                
                { "palavra" : "love" ,
                    "traducao" : "amor" },
                
                { "palavra" : "man" ,
                    "traducao" : "homem" },
                
                { "palavra" : "many" ,
                    "traducao" : "muitos" },
                
                { "palavra" : "me" ,
                    "traducao" : "a mim" },
                
                { "palavra" : "men" ,
                    "traducao" : "homens" },
                
                { "palavra" : "mind" ,
                    "traducao" : "mente" },
                
                { "palavra" : "more" ,
                    "traducao" : "mais" },
                
                { "palavra" : "much" ,
                    "traducao" : "muito" },
                    
                { "palavra" : "name" ,
                    "traducao" : "nome" },
                
                { "palavra" : "nature" ,
                    "traducao" : "natureza" },
                
                { "palavra" : "never" ,
                    "traducao" : "nunca" },
                
                { "palavra" : "new" ,
                    "traducao" : "novo" },
                
                { "palavra" : "night" ,
                    "traducao" : "noite" },
        
                { "palavra" : "nothing" ,
                    "traducao" : "nada" },
                
                { "palavra" : "now" ,
                    "traducao" : "agora" },
        
                { "palavra" : "off" ,
                    "traducao" : "desligado" },
                
                { "palavra" : "old" ,
                    "traducao" : "velho" },
                
                { "palavra" : "or" ,
                    "traducao" : "ou" },
                
                { "palavra" : "others" ,
                    "traducao" : "outros" },
                
                { "palavra" : "our" ,
                    "traducao" : "nosso" },
                
                { "palavra" : "out" ,
                    "traducao" : "fora" },
                
                { "palavra" : "part" ,
                    "traducao" : "parte" },
                
                { "palavra" : "people" ,
                    "traducao" : "povos" },
                
                { "palavra" : "place" ,
                    "traducao" : "lugar" },
                
                { "palavra" : "public" ,
                    "traducao" : "público" },
                
                { "palavra" : "roman" ,
                    "traducao" : "romano" },
                
                { "palavra" : "see" ,
                    "traducao" : "ver" },
                
                { "palavra" : "she" ,
                    "traducao" : "ela" },
                
                { "palavra" : "side" ,
                    "traducao" : "lado" },
                
                { "palavra" : "soon" ,
                    "traducao" : "breve" },
                
                { "palavra" : "state" ,
                    "traducao" : "estado" },
                
                { "palavra" : "take" ,
                    "traducao" : "tomada" },
                
                { "palavra" : "there" ,
                    "traducao" : "há" },
                
                { "palavra" : "those" ,
                    "traducao" : "aqueles" },
                
                { "palavra" : "three" ,
                    "traducao" : "tres" },
                
                { "palavra" : "to" ,
                    "traducao" : "para" },
                
                { "palavra" : "twenty" ,
                    "traducao" : "vinte" },
                
                { "palavra" : "up" ,
                    "traducao" : "para cima" },
                
                { "palavra" : "upon" ,
                    "traducao" : "sobre" },
                
                { "palavra" : "us" ,
                    "traducao" : "nós" },
                
                { "palavra" : "very" ,
                    "traducao" : "muito" },
                
                { "palavra" : "water" ,
                    "traducao" : "água" },
                
                { "palavra" : "we" ,
                    "traducao" : "nós" },
                
                { "palavra" : "well" ,
                    "traducao" : "bem" },
                
                { "palavra" : "when" ,
                    "traducao" : "quando" },
                
                { "palavra" : "where" ,
                    "traducao" : "onde" },
                
                { "palavra" : "while" ,
                    "traducao" : "quando" },
                
                { "palavra" : "who" ,
                    "traducao" : "quem" },
                
                { "palavra" : "whom" ,
                    "traducao" : "quem" },
                
                { "palavra" : "whose" ,
                    "traducao" : "de quem" },
                
                { "palavra" : "will" ,
                    "traducao" : "futuro" },
                
                { "palavra" : "with" ,
                    "traducao" : "com" },
                
                { "palavra" : "without" ,
                    "traducao" : "sem" },
                
                { "palavra" : "woman" ,
                    "traducao" : "mulher" },
                
                { "palavra" : "words" ,
                    "traducao" : "palavras" },
                
                { "palavra" : "work" ,
                    "traducao" : "trabalho" },
                
                { "palavra" : "world" ,
                    "traducao" : "mundo" },
                
                { "palavra" : "years" ,
                    "traducao" : "anos" },
                
                { "palavra" : "you" ,
                    "traducao" : "você" },
                
                { "palavra" : "young" ,
                    "traducao" : "jovens" },
                
                { "palavra" : "almost" ,
                    "traducao" : "quase" },
                
                { "palavra" : "arms" ,
                    "traducao" : "braços" },
                
                { "palavra" : "asked" ,
                    "traducao" : "pedida" },
                
                { "palavra" : "death" ,
                    "traducao" : "morte" },
                
                { "palavra" : "did" ,
                    "traducao" : "fazer" },
                
                { "palavra" : "down" ,
                    "traducao" : "para baixo" },
                
                { "palavra" : "each" ,
                    "traducao" : "cada um" },
                
                { "palavra" : "every" ,
                    "traducao" : "cada" },
                
                { "palavra" : "father" ,
                    "traducao" : "pai" },
                
                { "palavra" : "footnote" ,
                    "traducao" : "notas de rodapé" },
                
                { "palavra" : "general" ,
                    "traducao" : "geral" },
                
                { "palavra" : "has" ,
                    "traducao" : "tem" },
                
                { "palavra" : "he" ,
                    "traducao" : "ele" },
                
                { "palavra" : "her" ,
                    "traducao" : "dela" },
                
                { "palavra" : "into" ,
                    "traducao" : "em direção de" },
                
                { "palavra" : "last" ,
                    "traducao" : "último" },
                
                { "palavra" : "looked" ,
                    "traducao" : "olhada" },
                
                { "palavra" : "non" ,
                    "traducao" : "não" },
                
                { "palavra" : "nor" ,
                    "traducao" : "nem" },
                
                { "palavra" : "put" ,
                    "traducao" : "posto" },
                
                { "palavra" : "seen" ,
                    "traducao" : "visto" },
                
                { "palavra" : "thousand" ,
                    "traducao" : "mil" },
                
                { "palavra" : "too" ,
                    "traducao" : "demasiado" },
                
                { "palavra" : "under" ,
                    "traducao" : "sob" },
                
                { "palavra" : "until" ,
                    "traducao" : "até" },
                
                { "palavra" : "why" ,
                    "traducao" : "porque" }
        ]', true);
        app(\App\Services\PalavrasService::class)->adicionara($palavras);

            


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palavras_no_banco');
    }
}
