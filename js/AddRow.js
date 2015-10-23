/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var skillnumber=0;
function myCreateFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(skillnumber);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = 'Row1 cell1';
    cell2.innerHTML = 'Row1 cell1';
    skillnumber++;
}

function myDeleteFunction() {
    document.getElementById("myTable").deleteRow(skillnumber);
    skillnumber--;
}

