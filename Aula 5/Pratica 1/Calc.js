const buttons = ['+', '-', '/', 'x','7','8','9','C','4','5','6','=','1','2','3','0',',']
var visor = document.getElementById('visor')

var valorA, valorB, Operador = null;

function addValor(val){
    visor.innerText += val
}

function clear(){
    visor.innerText = '';
    Operador = null
    valorA = null
    valorB = null    
    visor.style = "color: gray; background: darkgray; box-shadow: 10px 10px gray inset;"
}

function addVirgula(){
    switch(visor.innerText){
        case '':
            visor.innerText = '0.'
            break;
        case '-':
            visor.innerText = '-0.'
            break;
        default:
            if(visor.innerText.indexOf(',') <= 0){
                visor.innerText += '.'
            }
    }
}

function addOperador(op){
    if (op == '-' && visor.innerText == ''){
        addValor('-');
    }
    else if (!(visor.innerText == '' || visor.innerText == '-') && Operador == null){
        Operador = op
        valorA = visor.innerText

        addValor(op);
    }
}

function paintVisor(val){
    if (val < 0){
        visor.style = "color: darkred; background: indianred; box-shadow: 10px 10px darkred inset;"
    }
    else if (val == 0){
        visor.style = "color: gray; background: darkgray; box-shadow: 10px 10px gray inset;"
    } 
    else{
        visor.style = "color: green; background: lightgreen; box-shadow: 10px 10px green inset;"
    }
}

function Result(){
    valorB = visor.innerText.substring(valorA.length+1, visor.innerText.length)
    
    let Result = null

    switch(Operador){
        case '+':
            Result = parseFloat(valorA) + parseFloat(valorB);
            break;
        case '-':
            Result = parseFloat(valorA) - parseFloat(valorB);
            break;
        case '/':
            Result =  parseFloat(valorA) / parseFloat(valorB);
            break;
        case 'x':
            Result =  parseFloat(valorA) * parseFloat(valorB);
            break;
    }

    valorA = Result
    Operador = null
    visor.innerText = Result.toFixed(2)

    paintVisor(Result) 
}

function CreateButtons(){
    for(let i = 0;i < buttons.length;i++){
        let btn = document.createElement('button');

        if (buttons[i] == '='){
            btn.style = 'grid-row: span 3';
        }
        if (buttons[i] == '0'){
            btn.style = 'grid-column: span 2';
        }

        if (buttons[i] in [0,1,2,3,4,5,6,7,8,9]){
            btn.onclick = function() {addValor(buttons[i])}
        }
        else if (buttons[i] == 'C'){
            btn.onclick = function() {clear()}
        }
        else if (buttons[i] == ','){
            btn.onclick = function() {addVirgula()}
        }
        else if (['+','-','/','x'].includes(buttons[i])){
            btn.onclick = function() {addOperador(buttons[i])}            
        }
        else if (buttons[i] == '='){
            btn.onclick = function() {Result()}
        }

        btn.innerText = buttons[i]

        document.getElementById('numpad').appendChild(btn)
    }
}