<?php
/* 5-20-15
 * Practice project from http://www.theodinproject.com/web-development-101/javascript-and-jquery
 * 
 *
 *  In progress....
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>etch a sketch</title>
</head>
<body>
    <button id='btn-clear-grid' type="button">Clear Grid</button>
</body>
</html>
<style>
table{
    border: 1px solid black;
}

tr {
    height: 50px;
    width: 50px;
    background-color:gray;
}

td.hover{
    background-color: black;    
}

td {
    height: 50px;
    width: 50px;
}

</style>
<script type="text/javascript">
var createGrid = function(num){
    //create container div
    var div = document.createElement('div');
    div.id = 'div-container';
    document.getElementsByTagName('body')[0].appendChild(div);
    //create table within container
    var table = document.createElement('table');
    table.id = 'table-grid';
    div.appendChild(table);
    
    createCells(num);
};

var createCells = function(num){
    for(var i = 0; i < num; i++){
        var tr = document.createElement('tr');
        for(var j = 0; j < num; j++){
            var td = document.createElement('td');
            td.id = 'cell_' + j;
            td.setAttribute("onmouseover", "this.className='hover';")
            tr.appendChild(td);
        }
        var target = document.getElementById('table-grid');
        target.appendChild(tr).appendChild(td);
    }
}

var clearGrid = function(){
    document.getElementById('table-grid').innerHTML = "";
    var answer = prompt("Enter a number between 1 and 100");
    if(answer >= 1 && answer < 100){
        createGrid(answer);
    }
}

window.onload = createGrid(16);
document.getElementById('btn-clear-grid').onclick = clearGrid;
</script>