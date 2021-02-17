<div id="boximg">
    <img class ="img" src="" alt="some text">
 <div class="my-5 d-flex justify-content-center"> 
    <div class="bloco1">
            <div class="form">
                    <form method="post" enctype="multipart/form-data" action="">
                    <label for="nome">Nome da receita: </label><br>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="idade">Faixa etaria: </label><br>
                    <select name="idade" id="idade">
                        <option value="meses_6_8" name="meses_6_8">6 a 8 meses</option>
                        <option value="meses_8_11" name="meses_8_11">8 a 11 meses</option>
                        <option value="anos_1_2" name="anos_1_2">1 a 2 anos</option>
                        <option value="anos_2_4" name="anos_2_4">2 a 4 anos</option>
                    </select><br>
                    <label for="ingredientes">Ingredientes:</label><br>
                    <textarea style="resize: none;" name="ingredientes" id="ingredientes"></textarea><br>
                    <p style="font-size: 10px; margin-top: 0;">A cada ingrediente pular uma linha</p>
                    <label for="preparo">Preparo:</label><br>
                    <textarea style="resize: none;" name="preparo" id="preparo"></textarea><br>
                    <label for="nome">Nome da Editor: </label><br>
                    <input type="text" name="nome" id="nome"><br><br>        
                    <input type="submit" value="Enviar" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>    
    