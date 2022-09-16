const validation = new JustValidate('#login');
validation
    .addField("#username", [
        {
            rule: "required"
        }
    ]);
validation
    .addField("#password", [
        {
            rule: "required"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("login").submit();
    });