(function(){
  const btn=document.querySelector('.mobile-toggle');
  const nav=document.querySelector('#site-nav');
  if(btn&&nav){btn.addEventListener('click',()=>nav.classList.toggle('open'));}
})();
