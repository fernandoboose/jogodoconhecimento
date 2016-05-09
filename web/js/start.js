$('document').ready(function(){
	var $collectionHolder;

	// setup an "add a tag" link
	var $addTagLink = $('<a href="#" class="add_tag_link">Clique aqui para adicionar uma nova equipe.</a>');
	var $newLinkLi = $('<li></li>').append($addTagLink);

	 $collectionHolder = $('#game_players');

    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addTagLink.on('click', function(e) {
        // prevent the link from creating a "#" on the URL
        e.preventDefault();

        // add a new tag form (see next code block)
        addGameForm($collectionHolder, $newLinkLi);
	});
});

function addGameForm($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');
    if(index == 0) index = 1;

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = prototype.replace(/__name__label__/g, 'Equipe '+index);
    newForm = newForm.replace(/__name__/g, index);


    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<li></li>').append(newForm);
    $newLinkLi.before($newFormLi);
}