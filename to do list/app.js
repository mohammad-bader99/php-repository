const list=$('#list');
const table=$('#table');
const btn=$('#btn');

let id=1;

btn.click( e=>{

    e.preventDefault();
    let List=list.val();
    

    if(List==""){
        alert("please enter the thing that you want to add");
        return;
    }

    table.append(`
        <tr>
        <td>${id}</td>
        <td>${List}</td>
        </tr>
        `);

    id++;
    
    list.val("");

});