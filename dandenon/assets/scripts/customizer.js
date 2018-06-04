function updateContain(Id) {

  // Update Active class in Accordion
  jQuery('#tabMain').children('li').removeClass("active");
  jQuery('#tabSub_' + Id).addClass("active");

  // Update Contains
  jQuery('#contenMain').children('div').removeClass("active");
  jQuery('#conten_' + Id).addClass("active");
}

function updateContainTeam(cId, mId, sId) {

  // Update Active class in Accordion
  jQuery('#accordionMain_' + cId).children('li').removeClass("active");
  jQuery('#accordion_' + cId + '_' + mId + '_' + sId).addClass("active");

  // Update Contains
  jQuery('#contenMain').children('div').removeClass("active");
  jQuery('#conten_' + cId + '_' + mId + '_' + sId).addClass("active");

}

function updateSlider(type, tCount, cCount) {
  tCount = Number(tCount);
  cCount = Number(cCount);
  jQuery('#rootSlider').children('div').removeClass("active");
  if (type === 'pre') {
    if (cCount === 1) {
      cCount = tCount;
    } else {
      cCount = cCount - 1;
    }
    jQuery('#drSlider_' + cCount).addClass("active");
  } else {
    if (tCount === cCount) {
      cCount = 1;
    } else {
      cCount = cCount + 1;
    }
    jQuery('#drSlider_' + cCount).addClass("active");
  }
}

function toggleIcon(e) {
  jQuery(e.target)
    .prev('.panel-heading')
    .find(".more-less")
    .toggleClass('glyphicon-plus glyphicon-minus');
}
jQuery('.panel-group').on('hidden.bs.collapse', toggleIcon);
jQuery('.panel-group').on('shown.bs.collapse', toggleIcon);