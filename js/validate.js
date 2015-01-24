$(".testform").simpleform({
			speed : 500,
			transition : 'fade',
			progressBar : true,
			showProgressText : true,
			validate: true
		});

		$("#testform2").simpleform({
			speed : 500,
			transition : 'slide',
			progressBar : true,
			showProgressText : true,
			validate: true
		});

		$("#testform3").simpleform({
			speed : 500,
			transition : 'none',
			progressBar : true,
			showProgressText : true,
			validate: false
		});

		function validateForm(formID, Obj){

			switch(formID){
				case 'testform' :
					Obj.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							name: {
								required: true
							},
							mentor_job: {
								required: true
							},
							mentor_org: {
								required: true
							},
							mentor_add: {
								required: true
							},
							mentor_office: {
								required: true
							},
							mentor_mobile: {
								required: true
							},
							mentor_bio: {
								required: true
							},
							list1: {
								required: true,
								 minlength: 1
							},
						},
						messages: {
							email: {
								required: "Please enter an email address",
								email: "Not a valid email address"
							},
							name: {
							 	required: "Please enter your name"
							},
							mentor_job: {
								required: "Please enter your job title"
							},
							mentor_org: {
								required: "Please enter your organization"
							},
							mentor_add: {
								required: "Please enter your complete address"
							},
							mentor_office: {
								required: "Please enter your office phone No."
							},
							mentor_mobile: {
								required: "Please enter your mobile No."
							},
							mentor_bio: {
								required: "Please enter your short biography."
							},
							list1: {
								required: "at least select one option."
							},
						}
					});
				return Obj.valid();
				break;

				case 'testform2' :
					Obj.validate({
						rules: {
							email: {
								required: true,
								email: true
							},
							name: {
								required: true
							},
							spouse_email: {
								required: true,
								email: true
							},
							spouse_name: {
								required: true
							},
							street: {
								required: true
							}
						},
						messages: {
							email: {
								required: "Please enter an email address",
								email: "Not a valid email address"
							},
							name: {
							 	required: "Please enter your name"
							},
							spouse_email: {
								required: "Please enter an email address",
								email: "Not a valid email address"
							},
							spouse_name: {
							 	required: "Please enter your spouses name"
							},
							street: {
								required: "Please enter street name"
							}
						}
					});
				return Obj.valid();
				break;
			}
		}