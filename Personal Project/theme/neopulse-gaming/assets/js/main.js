document.addEventListener('DOMContentLoaded', function(){
    // Menu toggle
    var btn = document.querySelector('.menu-toggle');
    var nav = document.querySelector('.site-nav');
    if(btn && nav){
        btn.addEventListener('click', function(){
            nav.classList.toggle('open');
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', String(!expanded));
        });
    }

    // Lightbox for gallery
    var modal = document.createElement('div');
    modal.className = 'np-modal';
    modal.innerHTML = '<img src="" alt="">';
    document.body.appendChild(modal);

    document.querySelectorAll('.gallery-item').forEach(function(a){
        a.addEventListener('click', function(e){
            e.preventDefault();
            var img = modal.querySelector('img');
            img.src = this.href;
            modal.classList.add('open');
        });
    });

    modal.addEventListener('click', function(){ modal.classList.remove('open'); });

    // Pressable CTAs
    function pressStart(){ this.classList.add('press'); }
    function pressEnd(){ this.classList.remove('press'); }

    var ctas = document.querySelectorAll('.cta-btn');
    ctas.forEach(function(el){
        el.addEventListener('mousedown', pressStart);
        el.addEventListener('touchstart', pressStart, {passive:true});
        el.addEventListener('mouseup', pressEnd);
        el.addEventListener('mouseleave', pressEnd);
        el.addEventListener('touchend', pressEnd);

        // keyboard accessibility: Enter/Space
        el.addEventListener('keydown', function(e){ if(e.key === 'Enter' || e.key === ' '){ e.preventDefault(); pressStart.call(el); }});
        el.addEventListener('keyup', function(e){ if(e.key === 'Enter' || e.key === ' '){ pressEnd.call(el); el.click(); }});

        // action: show floating pizza and toast
        el.addEventListener('click', function(e){
            var x = (e && e.clientX) ? e.clientX + window.scrollX : (el.getBoundingClientRect().left + el.offsetWidth/2 + window.scrollX);
            var y = (e && e.clientY) ? e.clientY + window.scrollY : (el.getBoundingClientRect().top + el.offsetHeight/2 + window.scrollY);
            spawnPizza(x,y);
            showToast(el.dataset.toast ? el.dataset.toast : 'Yum! Action performed');
        });
    });

    // spawn pizza emoji that flies up and fades
    function spawnPizza(x,y){
        var node = document.createElement('div');
        node.className = 'floating-pizza';
        node.style.left = x + 'px';
        node.style.top = y + 'px';
        node.style.opacity = '1';
        node.innerText = '🍕';
        document.body.appendChild(node);

        requestAnimationFrame(function(){
            node.style.transform = 'translate(-50%,-150%) scale(1.25)';
            node.style.opacity = '0';
        });

        setTimeout(function(){ if(node && node.parentNode) node.parentNode.removeChild(node); }, 800);
    }

    // simple toast mechanism
    function showToast(msg){
        var t = document.createElement('div');
        t.className = 'np-toast';
        t.innerText = msg;
        document.body.appendChild(t);

        setTimeout(function(){
            t.style.opacity = '0';
            setTimeout(function(){ if(t && t.parentNode) t.parentNode.removeChild(t); }, 400);
        }, 1700);
    }
});
