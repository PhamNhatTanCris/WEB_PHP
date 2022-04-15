// Đối tượng
function Validator(options) {
    function getParent(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }

    var selectorRules = {};

    //Hàm thực hiện validate
    function validate(inputElement, rule) {
        var errorMassage;
        var errorElement = getParent(
            inputElement,
            options.formGroupSelector
        ).querySelector(options.error);

        // Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];

        // Lặp qua từng rule và kiểm tra
        // Nếu có lỗi thì dừng việc kiểm tra
        for (var i = 0; i < rules.length; ++i) {
            switch (inputElement.type) {
                case "checkbox":
                case "radio":
                    errorMassage = rules[i](
                        formElenment.querySelector(rule.selector + ":checked")
                    );
                    break;
                default:
                    errorMassage = rules[i](inputElement.value);
            }
            if (errorMassage) {
                break;
            }
        }

        if (errorMassage) {
            errorElement.innerText = errorMassage;
            getParent(inputElement, options.formGroupSelector).classList.add(
                "invalid"
            );
        } else {
            errorElement.innerText = "";
            getParent(inputElement, options.formGroupSelector).classList.remove(
                "invalid"
            );
        }
        return !!errorMassage;
    }

    //Lấy Element của fomr Validate
    var formElenment = document.querySelector(options.form);
    if (formElenment) {
        formElenment.onsubmit = function (e) {
            e.preventDefault();

            var isFormValid = true;
            options.rules.forEach(function (rule) {
                var inputElement = formElenment.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);
                if (isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                if (typeof options.onSubmit === "function") {
                    var enableInputs = formElenment.querySelectorAll("[name]");
                    var formValues = Array.from(enableInputs).reduce(function (
                        values,
                        input
                    ) {
                        switch (input.type) {
                            case "radio":
                                if (input.matches(":checked"))
                                    values[input.name] = input.value;
                                break;
                            case "checkbox":
                                if (!input.matches(":checked")) return values;

                                if (!Array.isArray(values[input.name])) {
                                    values[input.name] = [];
                                }

                                values[input.name].push(input.value);
                                break;
                            case "file":
                                values[input.name] = input.files;
                            default:
                                values[input.name] = input.value;
                        }

                        return values;
                    },
                    {});
                    options.onSubmit(formValues);
                }
                //Trường hợp submit với hành vi mặc định
                else {
                    formElenment.submit();
                }
            }
        };
        // Lặp qua mỗi rule và xử lý (lắng nghe sư kiện blur, input)
        options.rules.forEach(function (rule) {
            //Lưu lại các rules cho mỗi inputElement
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElenment.querySelectorAll(rule.selector);

            Array.from(inputElements).forEach(function (inputElement) {
                var errorElement = getParent(
                    inputElement,
                    options.formGroupSelector
                ).querySelector(options.error);
                // Xử lý trường hợp blur khỏi input
                inputElement.onblur = function () {
                    validate(inputElement, rule);
                };

                // Xử lý mỗi khi user nhập vào input
                inputElement.oninput = function () {
                    errorElement.innerText = "";
                    getParent(
                        inputElement,
                        options.formGroupSelector
                    ).classList.remove("invalid");
                };
            });
        });
    }
}

//Định nghĩa rules
//Nguyên tắc các rules:
// 1. Khi có lỗi => trả ra massage lỗi
// 2. Khi hợp lệ => Không có k trả về gì
Validator.isRequired = function (selector) {
    return {
        selector: selector,
        test: function (value) {
            return value ? undefined : "Vui lòng nhập trường này";
        },
    };
};

Validator.isEmail = function (selector) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : "Trường này phải là email";
        },
    };
};

Validator.minLength = function (selector, min) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min
                ? undefined
                : `Vui lòng nhập tối thiểu ${min} ký tự`;
        },
    };
};

Validator.confirmPassword = function (selector, getConfirmValue, massage) {
    return {
        selector: selector,
        test: function (value) {
            return value === getConfirmValue()
                ? undefined
                : massage || "Giá trị nhập vào k đúng";
        },
    };
};
