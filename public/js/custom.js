const Filter = (e) => {
    e.getAttribute('direction') === 'ASC' ? e.setAttribute('direction', 'DESC') : e.setAttribute('direction', 'ASC');
    e.getAttribute('direction') === 'ASC' ?
      $(e).find('svg.fa-sort-down').css('display', 'inline') :
      $(e).find('svg.fa-sort-down').css('display', 'none');
    e.getAttribute('direction') === 'DESC' ?
      $(e).find('svg.fa-sort-up').css('display', 'inline') :
      $(e).find('svg.fa-sort-up').css('display', 'none');
};