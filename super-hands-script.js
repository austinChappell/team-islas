const authorImageArray = document.querySelectorAll('.image-container');
const quoteArray = document.querySelectorAll('.quote-container');
const quoteSectionArray = document.querySelectorAll('.quote');

quoteSectionArray.forEach((section) => {
  if (window.innerWidth > 800) {
    section.style.opacity = '0';
    let midOfElem = section.offsetTop + section.offsetHeight / 2;
    // console.log(section.clientHeight);
    window.addEventListener('scroll', () => {
      let windowBottom = window.scrollY + window.innerHeight;
      if (windowBottom > midOfElem) {
        section.style.opacity = '1';
        section.children[0].style.left = 0;
        // margin-left is for mobile
        // section.children[0].style.marginLeft = 0;
      }
    })
  } else {
    window.addEventListener('resize', () => {
      if (window.innerWidth > 0) {
        section.style.opacity = '1';
        section.children[0].style.left = 0;        
      }
    })
  }
})
