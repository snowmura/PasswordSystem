		function randomString() {
				var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz~`!@#$%^&*()_+-={}[]:<>?/|";
				var string_length = document.randform.ketasu.value;
				var randomstring = '';
				for (var i=0; i<string_length; i++) {
					var rnum = Math.floor(Math.random() * chars.length);
						randomstring += chars.substring(rnum,rnum+1);
				}
					document.randform.password.value = randomstring;
		}


