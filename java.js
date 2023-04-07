var approveButton = document.createElement("button");
approveButton.innerHTML ="Approve";
approveButton.onclick=function(){
	window.location.href ="approve.php?id="+row.id;

};
var rejectButton = document.createElement("button");
rejectButton.innerHTML ="Reject";
rejectButton.onclick=function(){
	window.location.href ="reject.php?id="+row.id;
};
var cell = document.createElement("td");
cell.appendChild(approveButton);
cell.appendChild(rejectButton);
tableRow.appendChild(cell);