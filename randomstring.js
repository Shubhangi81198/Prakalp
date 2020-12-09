
function create_random_string(){
var random_string='';
var characters='ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789abcdefghijklmnopqrstuvwxyz'
for(var i,i=0;i<characters.length;i++)
{

random_string+=characters.charAt(Math.floor(Math.random()*characters.length))
}
console.log(random_string)
}