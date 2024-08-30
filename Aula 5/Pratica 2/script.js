var table = document.getElementById('boletim')

function addLinha(e){
    tr = document.createElement('tr')

    table.appendChild(tr)
    
    for(let i = 0; i < 10; i++){
        let td = document.createElement('td')
            
        if(i == 0){
            td.innerText = 'Média'
        }
        else{
            let sum = 0
            for(j = 1; j <= 6; j++){
                let id = j+String(i) 

                sum += parseFloat(document.getElementById(id).innerText)
            }

            td.innerText = (parseFloat(sum)/6).toFixed(2)    
        }

        tr.appendChild(td);
    }

    e.setAttribute("disabled", true);
}