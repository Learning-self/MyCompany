/**
 * 
 */
window.onload = function(){
	// banner	
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true});
	// case
	jQuery(".picMarquee-left").slide({mainCell:".bd2 ul",autoPlay:true,effect:"leftMarquee",vis:3,interTime:50});
	// intro	
	intros = jQuery(".intro");
	intro2s = jQuery('.intro2');
	for(i=0;i<intros.length;i++){
		intros[i].onmousemove = function(num){
			return function(){
				path = "images/left"+(num+1)+"_2.png";
				this.firstChild.src = path;
				for(j=0;j<intro2s.length;j++){
					intro2s[j].style['display'] = 'none';
				}
				intro2s[num].style['display'] = 'block';
			}
		}(i);
		intros[i].onmouseout = function(num){
			return function(){
				path2 = "images/left"+(num+1)+".png";
				this.firstChild.src = path2;
			}
		}(i);
		

	}
}