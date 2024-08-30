var table = document.getElementById('tabela')

function mediaNota(){
    let tr = document.createElement('tr')
    table.appendChild(tr)

    for(let i = 0; i < 10; i++){
        let td = document.createElement('td')
        if(i == 0){
            td.innerText = 'Média notas'
        }
        else{

            let sum = 0
            for(j = 1; j <= 6; j++){
                let cell = document.getElementById(j.toString()+i.toString())
                
                sum += parseFloat(cell.innerText)
            }

            let med = sum / 6

            td.innerText = med.toFixed(2)
        }

        tr.appendChild(td)
    }
}


function mediaAluno(){
    for(let i = 0; i < 7; i++){
        let td = null 
        if(i == 0){
            td = document.createElement('th')
            td.innerText = 'Média Aluno'
            td.rowSpan = 2
        }
        else{
            td = document.createElement('td')
            let sum = 0
            for(j = 1; j <= 9; j++){
                let cell = document.getElementById(i.toString()+j.toString())
                
                sum += parseFloat(cell.innerText)
            }

            let med = sum / 9

            td.innerText = med.toFixed(2)
        }

        let tr = document.getElementById('tr'+i)
        tr.appendChild(td)
    }
}