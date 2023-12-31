<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Typing</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            .marker {
                background: #91dbf1;
            }
            .hidden {
                desplay: none;
            }
        </style>
    </head>
    <body class="antialiased">
    <x-app-layout>
        <x-slot name="header">
            <h1>練習モード</h1>
            <h2>{{ Auth::user()->name }} さんこんにちは</h2>
        </x-slot>
        
        <div id="game" class="text-container">
            <label for="inputText">
                <div id="meaning"></div>
                <div class="question">
                    <span id="entered" class="marker"></span>
                    <span id="remained"></span>
                </div>
            </label>
            <input type="text" class="text" id="inputText" autofocus>

        </div>
        
        <div id="message" class="text-container hidden">
            <div class="message">
                ゲームクリア！お疲れさまでした！<br>
                <button id="replayBtn" class="button">もう一度プレイする</button>
                <a href="/typing/tests">テストする</a>
            </div>
        </div>
        
        <script>
            'use strict';
        
            const words = @json($words);
            console.log(words);
            const questions = words.map((word)=>word.english_word);
            const meanings = words.map((word)=>word.meaning);

            console.log(questions);
            console.log(meanings);
            
            /*
            const questions = [
                'apple',
                'orange',
                'peach',
                'grape',
                'strawberry'
                ];
            */

            const meaning = document.getElementById('meaning');
            const entered = document.getElementById('entered');
            const remained = document.getElementById('remained');
            const inputText = document.getElementById('inputText');
            const game = document.getElementById('game');
            const message = document.getElementById('message');
            const replayBtn = document.getElementById('replayBtn');
            
            let remainedTextWords = remained.textContent.split('');
            let enteredTextWords = [];
            let currentKey;
            let currentText;
            let currentMeaning;
            
            const setQuestion = () => {
                currentKey = Math.floor( Math.random() * questions.length );
                currentText = questions[ currentKey ];
                currentMeaning = meanings[ currentKey ];
                
                
                questions.splice(currentKey, 1);
                meanings.splice(currentKey, 1);
                console.log(questions);
                console.log(meanings);
                
                meaning.textContent = currentMeaning;
                entered.textContent = '';
                remained.textContent = currentText;
                inputText.value = '';
                
                enteredTextWords = [];
                remainedTextWords = currentText.split('');
            };
            setQuestion();

            document.addEventListener('input', (e) => {
                if(remainedTextWords[0] == e.data){

                    enteredTextWords.push( remainedTextWords[0] );
                    remainedTextWords.shift();
                    
                    entered.textContent = enteredTextWords.join('');
                    remained.textContent = remainedTextWords.join('');
                    
                    if(remainedTextWords.length <= 0){
                        if(questions.length <= 0){
                            game.classList.add('hidden');
                            message.classList.remove('hidden');
                        }else{
                            setQuestion();
                        }
                    }
                    
                }
            });
            
            replayBtn.addEventListener('click', () => {
                window.location.reload();
            });
            
        </script>
    </x-app-layout>
    
    </body>
</html>
