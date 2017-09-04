const authorImageArray = document.querySelectorAll('.image-container');
const quoteArray = document.querySelectorAll('.quote-container');
const quoteSectionArray = document.querySelectorAll('.quote');

quoteSectionArray.forEach((section) => {
  section.style.opacity = '0';
  let midOfElem = section.offsetTop + section.offsetHeight / 2;
  console.log(section.children[1]);
  window.addEventListener('scroll', () => {
    let windowBottom = window.scrollY + window.outerHeight;
    if (windowBottom > midOfElem) {
      section.style.opacity = '1';
      section.children[0].style.left = 0;
      // margin-left is for mobile
      section.children[0].style.marginLeft = 0;
    }
  })
})
