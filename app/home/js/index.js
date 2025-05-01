! function(a) {
    a(function() {
        a(".button-sent #back").hide(),
		a(".button-sent #confirmer").hide(),
		a(".button-sent #continue").click(function(b) {
            a("#area .master-card").css("transform", "rotateY(180deg)"),
			a(".button-sent #back").show()
			a(".button-sent #confirmer").show()
			a(".button-sent #continue").hide()
        }), a(".button-sent #back").click(function(b) {
            a("#area .master-card").css("transform", "rotateY(0deg)"), a(this).hide()
			a(".button-sent #continue").show()
			a(".button-sent #confirmer").hide()
        })
    })
}(jQuery);