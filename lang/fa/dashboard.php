<?php

return [

    "sidebar" => [
        "main" => "داشبورد",
        "users" => [
            "label" => "کاربران",
            "create" => "کاربر جدید",
        ] ,
        "tags" => [
            "label" => "برچسب ها" ,
            "create" => "برچسب جدید" ,
        ],
        "roles" => [
            "label" => "نقش کاربری" ,
            "create" => "نقش جدید" ,
        ] ,
        "categories" => [
            "label" => "دسته بندی ها" ,
            "create" => "دسته بندی جدید" ,
        ],
        "views" => [
            "label" => "بازدید ها" ,
        ],
        "votes" => [
            "label" => "امتیاز ها" ,
        ],
        "skills" => [
            "label" => "مهارت ها" ,
            "create" => "مهارت جدید" ,
        ],
        "profile" => [
            "label" => "پروفایل کاربری",
            "setting" => "تنظیمات",
            "password" => "گذرواژه",
            "signout" => "خروج",
        ] ,
        "shopping" => [
            "label" => "فروشگاه" ,
            "products" => "محصولات" ,
        ] ,
    ],

    "pages" => [
        "profile" => [
            "index" => [
                "title" => "پروفایل کاربری",
                "description" => "بروزرسانی اطلاعات کاربری",
            ],
            "password" => [
                "title" => "گذرواژه",
                "description" => "بروزرسانی گذرواژه",
            ]
        ]
    ],

    "widget" => [
        "posts" => "نوشته ها",
        "pages" => "برگه ها",
        "products" => "محصولات",

        "users" => [
            "label" => "کاربران" ,
            "active" => "کاربران فعال" ,
            "deactive" => "کاربران غیرفعال" ,
        ]
    ],


    "mail" => [
        "verify" => [
            "submit" => "تایید حساب کاربری",
        ],
        "main" => "صفحه اصلی",
        "aboutus" => "درباره ما",
        "contactus" => "تماس با ما",
        "with-respect" => "با احترام",
    ],

    "browser" => [
        "pages" => [
            "login" => [
                "title" => "ورود به حساب کاربری",
            ],
            "register" => [
                "title" => "ایجاد حساب جدید",
            ]
        ]
    ],

    "login" => [
        "submit" => "ورود به حساب کاربری",
        "forget" => "گذرواژه خود را فراموش کرده اید ؟",
        "createNewAccount" => " اکانت خود را بسازید.",
        "notMember" => "عضو نیستید ؟",
    ],

    "register" => [
        "submit" => "ثبت نام",
        "areYouMember" => "شما عضو هستید؟",
        "singIn" => "وارد شوید",
    ],

    "btn" => [
        "update" => "بروزرسانی",
    ],

    "pagination" => [
        "firstPage" => "صفحه نخست" ,
        "nextPage" => "صفحه بعدی" ,
        "lastPage" => "صفحه آخر" ,
    ] ,
        
    "fields" => [
        "detail" => "جزییات" ,
        "loading" => "در حال بارگذاری ..." ,
        "primaryKeyID" => "#ID" ,
        "bio" => "بیوگرافی",
        "mobile" => "شماره موبایل",
        "name" => "نام و نام خانوادگی",
        "languages" => "زبان ها",
        "language" => "زبان",
        "last_login" => "آخرین ورود",
        "main_root" => "پوشه اصلی",
        "username" => "نام کاربری",
        'current_password' => "گذرواژه فعلی",
        "password" => "گذرواژه",
        "password_confirmation" => "تایید گذرواژه",
        "email" => "ایمیل",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "user_type" => "نوع کاربر",
        "status" => "وضعیت",
        "created_at" => "تاریخ ایجاد",
        "updated_at" => "تاریخ بروزرسانی",
        "deleted_at" => "تاریخ حذف",
        "user_id" => "کاربر",
        "title" => "عنوان",
        "description" => "توضیحات",
        "image" => "تصویر",
        "category_id" => "دسته بندی",
        "price" => "قیمت",
        "discount" => "تخفیف",
        "stock" => "موجودی",
        "meta_title" => "عنوان متا",
        "meta_description" => "توضیحات متا",
        "meta_keywords" => "کلمات کلیدی متا",
        "slug" => "نامک",
        "category" => "دسته بندی",
        "categories" => "دسته بندی ها",
        "product" => "محصول",
        "products" => "محصولات",
        "order" => "سفارش",
        "orders" => "سفارشات",
        "order_status" => "وضعیت سفارش",
        "order_statuses" => "وضعیت های سفارش",
        "order_status_id" => "وضعیت سفارش",
        "order_id" => "سفارش",
        "order_items" => "آیتم های سفارش",
        "order_item" => "آیتم سفارش",
        "order_item_id" => "آیتم سفارش",
        "quantity" => "تعداد",
        "total_price" => "مجموع قیمت",
        "total_discount" => "مجموع تخفیف",
        "total_tax" => "مجموع مالیات",
        "total_shipping_cost" => "مجموع هزینه ارسال",
        "total_price_with_tax" => "مجموع قیمت با مالیات",
        "total_price_with_tax_and_shipping" => "مجموع قیمت با مالیات و هزینه ارسال",
        "total_price_with_tax_and_shipping_and_discount" => "مجموع قیمت با مالیات و هزینه ارسال و تخفیف",
        "shipping_address" => "آدرس ارسال",
        "billing_address" => "آدرس پرداخت",
        "shipping_first_name" => "نام",
        "shipping_last_name" => "نام خانوادگی",
        "shipping_email" => "ایمیل",
        "shipping_phone" => "تلفن",
        "shipping_address1" => "آدرس",
        "shipping_address2" => "آدرس 2",
        "shipping_city" => "شهر",
        "shipping_state" => "استان",
        "shipping_country" => "کشور",
        "shipping_zip_code" => "کد پستی",
        "billing_first_name" => "نام",
        "billing_last_name" => "نام خانوادگی",
        "billing_email" => "ایمیل",
        "billing_phone" => "تلفن",
        "billing_address1" => "آدرس",
        "billing_address2" => "آدرس 2",
        "billing_city" => "شهر",
        "billing_state" => "استان",
        "billing_country" => "کشور",
        "billing_zip_code" => "کد پستی",
        "payment_method" => "روش پرداخت",
    ],

    "notification" => [
        "verify" => [
            "label" => ":attribute عزیز",
            "link"  => "تایید حساب کاربری",
        ],
        "replay" => "این ایمیل به صورت اتوماتیک برای شما ارسال شده است. لطفا به آن پاسخ ندهید چون کسی آن را دریافت نمیکند."
    ],
    "success" => [
        "profile" => [
            "update" => "حساب کاربری با موفقیت ویرایش گردیده است",
        ],
        "authunticate" => [
            "login" => " :attributes عزیز ; شما با موفقیت وارد حساب کاربری خود شده اید",
        ],
        "portfolio" => [
            "create" => "نمونه کار با موفقیت ساخته شده است",
            "update" => "نمونه کار با موفقیت ویرایش گردیده است",
            "delete" => "نمونه کار با موفقیت حذف گردیده است",
        ],
        "gateway" => [
            "create" => "درگاه با موفقیت ساخته شده است",
            "update" => "درگاه با موفقیت ویرایش گردیده است",
            "delete" => "درگاه مورد نظر با موفقیت حذف گردیده است",
        ],
        "post" => [
            "create" => "پست با موفقیت ساخته شده است",
            "update" => "پست با موفقیت ویرایش گردیده است",
            "delete" => "پست مورد نظر با موفقیت حذف گردیده است",
            "forceDelete" => "پست بصورت کامل حذف گردیده است",
            "restore" => "پست از سطل زباله بازگردانده شده است",
        ],
        "page" => [
            "create" => "برگه با موفقیت ساخته شده است",
            "update" => "برگه با موفقیت ویرایش گردیده است",
            "delete" => "برگه مورد نظر با موفقیت حذف گردیده است",
        ],
        "product" => [
            "create" => "محصول با موفقیت ساخته شده است",
            "update" => "محصول با موفقیت ویرایش گردیده است",
            "delete" => "محصول مورد نظر با موفقیت حذف گردیده است",
            "forceDelete" => "محصول بصورت کامل حذف گردیده است",
            "restore" => "محصول از سطل زباله بازگردانده شده است",
        ],
        "filemanager" => [
            "rename" => "نام ':name' به ':newName' تغییر کرده است",
            "move" => "فایل یا فولدر ':name' به ':destination' انتقال یافته است",
            "create_folder" => "پوشه :attribute با موفقیت ساخته شده است",
            "without_delete" => "هیچ فایلی حذف نگردیده است",
            "delete" => "':attribute' فایل با موفقیت حذف گردیده است",
            "upload" => "فایل با موفقیت آپلود گردیده است",
        ],
        "skill" => [
            "create" => "مهارت با موفقیت ساخته شده است",
            "update" => "مهارت با موفقیت ویرایش گردیده است",
            "delete" => "مهارت مورد نظر موفقیت حذف گردیده است",
        ],
        "option" => [
            "update" => "تنظیمات با موفقیت ویرایش گردیده است",
        ],
        "tag" => [
            "create" => "برچسب با موفقیت ساخته شده است",
            "update" => "برچسب با موفقیت ویرایش گردیده است",
            "delete" => "برچسب مورد نظر موفقیت حذف گردیده است",
        ],
        "category" => [
            "create" => "دسته بندی با موفقیت ساخته شده است",
            "update" => "دسته بندی با موفقیت ویرایش گردیده است",
            "delete" => "دسته بندی مورد نظر موفقیت حذف گردیده است",
        ],
        "role" => [
            "create" => "نقش کاربری با موفقیت ساخته شده است",
            "update" => "نقش کاربری با موفقیت ویرایش گردیده است",
            "delete" => "نقش کاربری با موفقیت حدف گردیده است",
        ],
        "register" => [
            "create" => "حساب کاربری شما با موفقیت ساخته شده است، ایمیلی حاوی تایید حساب کاربری برای شما ارسال گردیده است",
            "verify" => "پست الکترونیکی شما با موفقیت تایید شده است"
        ],
        "user" => [
            "create" => "کاربر جدید با موفقیت افزوده گردیده است",
            "update" => "اطلاعات کاربری با موفقیت ویرایش گردیده است",
            "delete" => "کاربر مورد نظر با موفقیت حذف گردیده است",
        ],
        "serial" => [
            "create" => "سریال جدید با موفقیت ساخته شده است",
            "update" => "سریال با موفقیت ویرایش گردیده است",
            "delete" => "سریال با موفقیت حذف گردیده است",
        ],
        "language" => [
            "create" => "زبان جدید با موفقیت ساخته شده است",
            "update" => "زبان با موفقیت ویرایش گردیده است",
            "delete" => "زبان با موفقیت حذف گردیده است",
        ],
        "currency" => [
            "create" => "واحدپولی جدید با موفقیت ساخته شده است",
            "update" => "واحدپولی با موفقیت ویرایش گردیده است",
            "delete" => "واحدپولی با موفقیت حذف گردیده است",
        ]
    ],
    "error" => [
        "authunticate" => [
            "unauthunticate" => "شما ابتدا باید وارد حساب کاربری خود شوید",
            "unauthorize" => "دسترسی به این مسیر برای شما امکان پذیر نمی‌باشد",
            "login" => "کاربری با این اطلاعات یافت نشده است",
        ],
        "register" => [
            "verify" => "پست الکترونیکی شما قبلا تایید شده است و یا توکن ارسالی منقضی شده است"
        ],
        "validation" => [
            "unauthorize_file" => "فایل پیوستی قابل دسترسی نمیباشد !",
            "exists_object_name" => "قبلا این فابل یا فولدر ثبت شده است !",
            "exists_parent_folder" => "فولدر برای شما قابل دسترس نمی باشد !",
            "categories" => "دسته بندی انتخاب شده معتبر نمی‌باشد",
            "tags" => "برچسب انتخاب شده معتبر نمی‌باشد",
            "post-serial-access" => "شما به این پُست دسترسی ندارید !!!",
            "range" => "فرمت ورودی برای فیلتر کردن رنج معتبر نمیباشد",
            "mobile" => "شماره همراه معتبر نمی‌باشد",
            "username" => "نام کاربری معتبر نمی‌باشد",
            "password" => "گذرواژه باید بیشتر از 4 کاراکتر باشد",
            "slug" => "پیوند یکتا معتبر نمی‌باشد",
            "term_id" => "توانایی ثبت بعنوان دسته والد وجود ندارد",
            "color" => "فرمت رنگ باید از نوع HEX باشد",
            "currency" => "فرمت یا آیدی واحد پولی صحیح نمی باشد",
            "language" => [
                "not_equal_count" => "نشانی اختصاصی زبان انتخاب شده معتبر نمی باشد",
                "not_found_default_lang" => "نشانی اختصاصی زبان پیش فرض سیستم اجباری می باشد",
            ]
        ]
    ]
];
