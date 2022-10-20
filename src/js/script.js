$(document).ready(function() {
    $('body').addClass('js')
    document.body.parentNode.style.overflowX = 'hidden'

    // decide herf
    const href = window.location.href
    console.log(href)
        // lodging
    if (href.includes('lodging')) {
        $('.checkSuccess').click(function() {
                $('#myModal').hide()
                alert('Reservation succeeded')
            })
            //  click function and make sure the number bigger than 0 
        $('.on-number').click(function() {
                var $val = $(this).siblings("input[type='text']"),
                    val = parseInt($val.val(), 10) + parseInt($(this).data('v'))
                if (val > 0) {
                    $val.val(isNaN(val) ? 0 : val)
                } else {
                    alert('Cannot be less than 0')
                }
            })
            //  window toggle function 
        $('.read-more').click(function() {
            $('#myModal').show()
        })
        $('.close').click(function() {
            $('#myModal').hide()
            $('#bookingModal').hide()
        })

        $('.BOOKING').click(function() {
                $('#bookingModal').show()
            })
            //  nav background change
        let nav = document.getElementById('nav1')
        setInterval(function aaa() {
            if (document.documentElement.scrollTop > 100) {
                nav.style.background = '#bf2c37'
            } else {
                nav.style.background = 'none'
            }
        }, 200)
    } else if (href.includes('contact')) {
        let obj1 = document.getElementById('nav1')
        setInterval(function aaa() {
            if (document.documentElement.scrollTop > 100) {
                obj1.style.background = 'black'
            } else {
                obj1.style.background = 'none'
            }
        }, 200)
    } else if (href.includes('mountain')) {
        let obj1 = document.getElementById('nav1')
        setInterval(function aaa() {
            if (document.documentElement.scrollTop > 100) {
                obj1.style.background = '#4ab4d1'
            } else {
                obj1.style.background = 'none'
            }
        }, 200)
    } else if (href.includes('shop')) {
        let nav = document.getElementById('nav1')
        setInterval(function aaa() {
                if (document.documentElement.scrollTop > 100) {
                    nav.style.background = 'white'
                } else {
                    nav.style.background = 'none'
                }
            }, 200)
            //  left side part will pop up.
        let obj1 = document.getElementById('aside4')
        let obj2 = document.getElementById('nav-center')
        let obj3 = document.getElementById('aside')

        obj2.onclick = function() {
            obj3.style.left = 0
            obj3.style.transition = 0.7 + 's'
        }
        obj1.onclick = function() {
            obj3.style.left = -50 + 'vw'
            obj3.style.transition = 0.7 + 's'
        }
    }
})