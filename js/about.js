/**
 * 
 */
window.onload = function(){
	cats = document.getElementById('about_cat').getElementsByTagName('li');
	abouts = document.getElementsByClassName('about_us');
	
	for(i=0;i<cats.length;i++){
		cats[i].onmouseover = function(num){
			return function(){
				for(j=0;j<abouts.length;j++){
					abouts[j].style['display'] = 'none';
				}
				abouts[num].style['display'] = 'block';
			}
		}(i);
	}
}