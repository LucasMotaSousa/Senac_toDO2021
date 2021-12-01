const nlinks = document.querySelectorAll('ul.nav-pills li a')

console.log(nlinks)

function ativarMenu()
{
    for(const nLink of nlinks)
    {
        console.log(nLink.getAttribute('href'))
        nLink.addEventListener('click', function(){
            nLink.classList.add('active')
            nLink.classList.remove('text-white')
        })
    }

}

const elemento = document.querySelector('.imprimir')
elemento.addEventListener('click',function(){
    window.print()
})