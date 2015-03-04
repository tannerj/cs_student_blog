/**
 *  This script handles the meet the team marquee
 */
$('Document').ready(function() {

  //Keep track of current position of objects
  var curState = 0;

  //Find how many Meet the team objects we have
  var objCount = $('.mt-imgBox').length;
  var imgHeight = 150;  
  var descriptHeight = $('.mt-descriptions').height() + 50;
    
  
  //random seed generation
  var seed = seedGen(objCount);

  //Array of offset indexes ex: [0 => 3, 1 => 0, 2 => 1, 3 => 0]
  var offsetIndexes = getOffsetIndexes(seed, objCount);
  
  //Populate the .mt-imagesBox with the listed images
  $('.mt-imgBox').each(function(index) {
    //Using the offset Index to randomize the starting point
    //of the meet the team section, set the position of the images.
    var imgPosition = imgHeight * offsetIndexes[index];
    $(this).css('top', -(imgPosition));
    $('.mt-imagesBox').append($(this));
  });

  //Populate the .mt-descriptions with descriptions listed
  $('.mt-description').each(function(index) {
    var newDescriptHeight = descriptHeight * offsetIndexes[index];
    $(this).css('top', -(newDescriptHeight));
    $('.mt-descriptions').append($(this));
  });

  //handle the next button
  $('.mt-controls .next').click(function() {
    //If we are on last state, reset; else iterate again.
    //Minus 1 because the index starts at zero while the objCounter starts
    //at 1.
    if(curState === (objCount - 1)) {
      //Roll back the current state to the beginning
      curState = 0;

      //Roll the images back to start
      $('.mt-imgBox').each(function(index) {
        var resetImgPos = offsetIndexes[index] * imgHeight;
        $(this).css('top', -(resetImgPos));
      });

      //Roll the descritions back to start
      $('.mt-description').each(function(index) {
        var resetDescriptPos = offsetIndexes[index] * descriptHeight;
        $(this).css('top', -(resetDescriptPos));
      });

      //stop the link from firing
      return false;
    } else { 
      //Increment our current state
      curState++;

      $('.mt-imgBox').each(function(index) {
        //Get the .mt-imgBox's top property and parse it to an int.
        var curImgPos   = parseInt($(this).css('top'));
        var newImgPos = curImgPos + imgHeight;
        $(this).css('top', newImgPos);
      });

      $('.mt-description').each(function(index) {
        //Get the .mt-description's top property and parse it to an int.
        var curDescriptPos  = parseInt($(this).css('top'));
        var newDescriptPos  = curDescriptPos + descriptHeight;
        $(this).css('top', newDescriptPos);
      });

      //stop the link from firing
      return false;
    }
  });

  //handle the previous button
  $('.mt-controls .previous').click(function() {
    //If we are at the 0 position, loop to end.
    if(curState === 0) {
      //We've looped to the end, reflect that in the current State.
      curState = objCount - 1;
      
      //move the images
      $('.mt-imgBox').each(function(index) {
        //we need to reverse the power of the index as a multiple of
        //imgHeight
        var resetImgPos = ((objCount - 1) - offsetIndexes[index]) * imgHeight;
        
        //reset the top property.
        $(this).css('top', resetImgPos);
      });
      
      //move the descriptions.
      $('.mt-description').each(function(index) {
        //We need to reverse the power of the index as a multiple of
        //descriptHeight
        var resetDescriptPos  = ((objCount -1) - offsetIndexes[index]) * descriptHeight;

        //reset the top property of descriptions.
        $(this).css('top', resetDescriptPos);
      });

      //stop the link from firing
      return false;
    } else {
      //Decrement our state
      curState--;

      $('.mt-imgBox').each(function(index) { 
        //Get the .mt-imgBox's top property and parse it to an int.
        var curImgPos = parseInt($(this).css('top'));
        var newImgPos = curImgPos - imgHeight;
        $(this).css('top', newImgPos);
      });

      $('.mt-description').each(function(index) {
        //Get the .mt-description's top property and parse it to an int.
        var curDescriptPos  = parseInt($(this).css('top'));
        var newDescriptPos  = curDescriptPos - descriptHeight;
        $(this).css('top', newDescriptPos);
      });

      //stop the link from firing
      return false;
    }
  });
}); // End Document.ready

/**
 *  generates a random number between 0 and the range param.
 */
function seedGen(range) {
  //Clamp our results to our range.
  var denom = 10/range;
  //generate the random number and convert to int.
  var rand  = Math.floor(Math.random() * 10);
  //apply the camp
  var seed  = Math.floor(rand/denom);

  return seed;
}

/**
 * Generate an array of offset indexes
 * using an offset and number of objects.
 */
function getOffsetIndexes(offset, objCount) {
  var offsetIndexes = new Array();

  for(var i=0; i < objCount; i++)
  {
    offsetIndexes[i] = (i + offset) % objCount;
  }
  return offsetIndexes;
}
