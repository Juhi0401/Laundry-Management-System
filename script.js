$(document).ready(function(){
    $(window).scroll(function(){
        // alert("hi")
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // alert("hi")
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // alert("hi")
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        // alert("hi")
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    
    
});
// function login(){
    
       
    
//     if (document.getElementById('Admin').checked) {
//         document.login_form.action="admin.html"
//     }
//     if (document.getElementById('Manager').checked) {
//         document.login_form.action="manager.html"
//     }
//     if (document.getElementById('User').checked) {
//         document.login_form.action="user.html"
//     }
//     if (document.getElementById('Visitor').checked) {
//         document.login_form.action="visitor.html"
//     }
       
// }
function uplaceorder() {
    // alert("hi")
    
    document.getElementById('Div1').style.display = 'block';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    
    //   if (document.getElementById('Div1').style.display == 'block') {
    //     document.getElementById('Div1').style.display = 'none';
    //     document.getElementById('Div2').style.display = 'block';
    //   } else {
    //     document.getElementById('Div1').style.display = 'block';
    //     document.getElementById('Div2').style.display = 'none';
    //   }
    
  }
function uvieworder(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'block';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
}
function ufeedback(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'block';
    document.getElementById('Div4').style.display = 'none';
}
function ucomplain(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'block';
}

function vplaceorder() {
    // alert("hi")
    
    document.getElementById('Div1').style.display = 'block';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    
    
    
  }
function vvieworder(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'block';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
}
function vfeedback(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'block';
    document.getElementById('Div4').style.display = 'none';
}
function vcomplain(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'block';
}

function adiv1(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'block';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function adiv2(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'block';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function adiv3(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'block';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function adiv4(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'block';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function adiv5(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'block';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function adiv6(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'block';
    document.getElementById('Div7').style.display = 'none';
}
function adiv7(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'block';
}


function mdiv1(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'block';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function mdiv2(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'block';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
    
}
function mdiv3(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'block';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function mdiv4(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'block';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function mdiv5(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'block';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'none';
}
function mdiv6(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'block';
    document.getElementById('Div7').style.display = 'none';
}
function mdiv7(){
    // alert("hiihi")
    document.getElementById('Div1').style.display = 'none';
    document.getElementById('Div2').style.display = 'none';
    document.getElementById('Div3').style.display = 'none';
    document.getElementById('Div4').style.display = 'none';
    document.getElementById('Div5').style.display = 'none';
    document.getElementById('Div6').style.display = 'none';
    document.getElementById('Div7').style.display = 'block';
}

// function signout(){
//     alert("Your are Signed out")
//     window.location.href="home.html"
// }
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }

  