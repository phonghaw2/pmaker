<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'                  => 'Trường :attribute phải được chấp nhận.',
    'accepted_if'               => 'Trường :attribute phải được chấp nhận khi :other có giá trị là :value.',
    'active_url'                => 'Trường :attribute không phải là một URL hợp lệ.',
    'after'                     => 'Trường :attribute phải được bắt đầu từ sau ngày :date.',
    'after_or_equal'            => 'Trường :attribute phải là thời gian từ :date. trở đi',
    'alpha'                     => 'Trường :attribute chỉ được chứa các chữ cái.',
    'alpha_dash'                => 'Trường :attribute chỉ được chứa ký tự chữ cái, số, dấu gạch nối và dấu gạch ngang',
    'alpha_num'                 => 'Trường :attribute chỉ được chứa ký tự chữ cái và số.',
    'array'                     => 'Trường :attribute phải là một mảng.',
    'before'                    => 'Trường :attribute phải là thời gian từ trước ngày :date.',
    'before_or_equal'           => 'Trường :attribute phải là thời gian bắt đầu trước hoặc đúng bằng :date.',
    'boolean'                   => 'Trường :attribute field must be true or false.',
    'confirmed'                 => 'Giá trị xác nhận của trường :attribute không khớp.',
    'current_password'          => 'Mật khẩu không chính xác',
    'date'                      => 'Trường :attribute không thuộc định dạng ngày tháng hợp lệ.',
    'date_equals'               => 'Trường :attribute phải là ngày :date.',
    'date_format'               => 'Trường :attribute có định dạng không giống với :format.',
    'declined'                  => 'Trường :attribute phải bị từ chối.',
    'declined_if'               => 'Trường :attribute phải bị từ chối khi :other có giá trị là :value.',
    'different'                 => 'Trường :attribute và :other phải khác nhau.',
    'digits'                    => 'Trường :attribute phải có :digits chữ số.',
    'digits_between'            => 'Trường :attribute phải có từ :min đến :max chữ số.',
    'dimensions'                => 'Trường :attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'                  => 'Trường :attribute có giá trị bị trùng lặp.',
    'email'                     => 'Trường :attribute phải là một địa chỉ email hợp lệ.',
    'ends_with'                 => 'Trường :attribute phải kết thúc bằng một trong các giá trị sau :values.',
    'enum'                      => 'Giá trị đã chọn tại :attribute không hợp lệ.',
    'exists'                    => 'Giá trị đã chọn tại :attribute không hợp lệ.',
    'file'                      => ':attribute phải là một tệp tin.',
    'filled'                    => 'Trường :attribute không được bỏ trống.',
    'image'                     => ':attribute phải thuộc định dạng hình ảnh.',
    'in'                        => 'Giá trị đã chọn tại trường :attribute không hợp lệ.',
    'in_array'                  => 'Trường :attribute không tồn tại trong tập :other.',
    'integer'                   => 'Trường :attribute phải là một số nguyên.',
    'ip'                        => 'Trường :attribute phải là một địa chỉ IP.',
    'ipv4'                      => 'Trường :attribute phải là một địa chỉ IPv4.',
    'ipv6'                      => 'Trường :attribute phải là một địa chỉ IPv6.',
    'json'                      => 'Trường :attribute phải là một chuỗi JSON.',
    'mac_address'               => 'The :attribute must be a valid MAC address.',
    'mimes'                     => ':attribute phải là một tập tin thuộc định dạng: :values.',
    'mimetypes'                 => 'attribute phải là một tập tin thuộc định dạng: :values.',
    'multiple_of'               => ':attribute phải là bội số của :value.',
    'not_in'                    => 'Giá trị đã chọn tại :attribute không hợp lệ.',
    'not_regex'                 => ':attribute có định dạng không hợp lệ.',
    'numeric'                   => 'Trường :attribute phải là một số.',
    'password'                  => 'Sai mật khẩu',
    'present'                   => 'Trường :attribute phải tồn tại trong dữ liệu đầu vào.',
    'prohibited'                => 'Trường :attribute phải bị thiếu hoặc trống.',
    'prohibited_if'             => 'Trường :attribute phải bị thiếu hoặc trống khi :other có giá trị là :value.',
    'prohibited_unless'         => 'Trường :attribute phải bị thiếu hoặc trống trừ khi :other có giá trị là :values.',
    'prohibits'                 => 'Trường :attribute phải bị thiếu hoặc trống khi :other tồn tại.',
    'regex'                     => ':attribute có định dạng không hợp lệ.',
    'required'                  => ':attribute phải được nhập.',
    'required_array_keys'       => 'Trường :attribute phải là một mảng chứa giá trị: :values.',
    'required_if'               => 'Trường :attribute không được bỏ trống khi :other là :value.',
    'required_unless'           => 'Trường :attribute không được bỏ trống trừ khi :other là :values.',
    'required_with'             => 'Trường :attribute không được bỏ trống khi :values có giá trị.',
    'required_with_all'         => 'Trường :attribute không được bỏ trống khi các :values có giá trị.',
    'required_without'          => 'Trường :attribute không được bỏ trống khi :values không có giá trị.',
    'required_without_all'      => 'Trường :attribute không được bỏ trống khi tất cả các :values không có giá trị.',
    'same'                      => ':attribute và :other phải khớp.',
    'starts_with'               => 'Trường :attribute phải được bắt đầu bằng một trong những giá trị sau: :values',
    'string'                    => 'Trường :attribute phải là một chuỗi kí tự.',
    'timezone'                  => 'Trường :attribute phải là một múi giờ hợp lệ.',
    'unique'                    => 'Trường :attribute đã có trong cơ sở dữ liệu.',
    'uploaded'                  => 'Trường :attribute tải lên thất bại.',
    'url'                       => 'Trường :attribute không giống với định dạng một URL.',
    'uuid'                      => 'Trường :attribute phải là một chuỗi UUID hợp lệ.',
    'size' => [
        'numeric'   => 'The :attribute must be :size.',
        'file'      => 'The :attribute must be :size kilobytes.',
        'string'    => 'The :attribute must be :size characters.',
        'array'     => 'The :attribute must contain :size items.',
    ],
    'min' => [
        'numeric'   => 'Trường :attribute phải tối thiểu là :min.',
        'file'      => 'Dung lượng tập tin trong trường :attribute phải tối thiểu :min kB.',
        'string'    => 'Trường :attribute phải có tối thiểu :min ký tự.',
        'array'     => 'Trường :attribute phải có tối thiểu :min phần tử.',
    ],
    'max' => [
        'numeric'   => 'Trường :attribute không được lớn hơn :max.',
        'file'      => 'Dung lượng tập tin trong trường :attribute không được lớn hơn :max kB.',
        'string'    => 'Trường :attribute không được lớn hơn :max ký tự.',
        'array'     => 'Trường :attribute không được nhiều hơn :max phần tử.',
    ],
    'lt' => [
        'numeric'   => 'Giá trị trường :attribute phải nhỏ hơn :value.',
        'file'      => 'Dung lượng trường :attribute phải nhỏ hơn :value kilobytes.',
        'string'    => 'Độ dài trường :attribute phải nhỏ hơn :value ký tự.',
        'array'     => 'Mảng :attribute phải có ít hơn :value phần tử.',
    ],
    'lte' => [
        'numeric'   => 'Giá trị trường :attribute phải nhỏ hơn hoặc bằng :value.',
        'file'      => 'Dung lượng trường :attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
        'string'    => 'Độ dài trường :attribute phải nhỏ hơn hoặc bằng :value ký tự.',
        'array'     => 'Mảng :attribute không được có nhiều hơn :value phần tử.',
    ],
    'gt' => [
        'numeric'   => 'Giá trị trường :attribute phải lớn hơn :value.',
        'file'      => 'Dung lượng trường :attribute phải lớn hơn :value kilobytes.',
        'string'    => 'Độ dài trường :attribute phải nhiều hơn :value ký tự.',
        'array'     => 'Mảng :attribute phải có nhiều hơn :value phần tử.',
    ],
    'gte' => [
        'numeric'   => 'Giá trị trường :attribute phải lớn hơn hoặc bằng :value.',
        'file'      => 'Dung lượng trường :attribute phải lớn hơn hoặc bằng :value kilobytes.',
        'string'    => 'Độ dài trường :attribute phải lớn hơn hoặc bằng :value ký tự.',
        'array'     => 'Mảng :attribute phải có ít nhất :value phần tử.',
    ],
    'between' => [
        'numeric'   => 'Trường :attribute phải nằm trong khoảng từ :min đến :max.',
        'file'      => 'Dung lượng tập tin trong trường :attribute phải từ :min - :max kB.',
        'string'    => 'Trường :attribute phải từ :min đến :max ký tự.',
        'array'     => 'Trường :attribute phải có từ :min - :max phần tử.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'last_name'             => 'họ',
        'first_name'            => 'tên',
        'full_name'             => 'họ và tên',
        'name'                  => 'tên',
        'username'              => 'tên đăng nhập',
        'address'               => 'địa chỉ',
        'sex'                   => 'giới tính',
        'gender'                => 'giới tính',
        'age'                   => 'tuổi',
        'birthday'              => 'Ngày sinh',
        'phone'                 => 'số điện thoại',
        'city'                  => 'thành phố',
        'country'               => 'quốc gia',
        'description'           => 'mô tả',
        'about_me'              => 'phần giới thiệu',
        'email'                 => 'địa chỉ email',
        'message'               => 'lời nhắn',
        // Thời gian
        'time'                  => 'thời gian',
        'hour'                  => 'giờ',
        'minute'                => 'phút',
        'second'                => 'giây',
        'date'                  => 'ngày',
        'day'                   => 'ngày',
        'month'                 => 'tháng',
        'year'                  => 'năm',
        'mobile'                => 'di động',
        'password'              => 'mật khẩu',
        'password_confirmation' => 'xác nhận mật khẩu',
        'subject'               => 'tiêu đề',
        'title'                 => 'tiêu đề',
        'content'               => 'nội dung',
        'body'                  => 'nội dung',
        'available'             => 'có sẵn',
    ],

];
