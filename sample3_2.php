3-2 クラスの継承

あるAというクラスを作成したとしてそのクラスとは別にBというクラスが必要になったとします。
BクラスはAクラスの機能を拡張したようなものだった場合、ほとんどAクラスと同じ関数を用意すること
になりますね。
そういった場合、継承という機能を利用することで、AとBを親と子の関係にすることができます。
例えば次のようなクラスがあるとする。

    //=================コード====================
    class Person
    {
    # 名前
    private $name;
    # 年齢
    private $age;
    
    public function getName()
    {
    return $this->name;
    }
    
    public function getAge()
    {
    return $this->age;
    }
    
    public function setName($name)
    {
    $this->name = $name;
    }
    
    public function setAge($age)
    {
    $this->age = $age;
    }
    }
    //=================コード====================

    このクラスは「人」を表すクラスです。
    例えば、「先生」と「生徒」のクラスを作る際、「先生」も「生徒」も人であるという考え方ができま
    す。(is-a関係)
    PHPでは、 class Person が保持しているように、「先生」にも「生徒」にも名前や年齢といった情報
    が必要となる場合、
    それらの共通項目を持ったクラスを作成し、そのクラスを継承することができます。
    (継承元、継承先はそれぞれ親クラスまたはスーパークラス、子クラスまたはサブクラスと呼びます)

    3-2-1 継承方法

    では実際に Person クラスを継承した、 Teacher クラスを作成してみましょう。
    継承するためにはクラス定義の際、クラス名の隣に extends キーワードを記述する必要があります。
    Person のフィールドへは private ではアクセスできなくなるため、忘れずに protected に変更し
    ましょう。

    //=================コード====================
    # Personを定義します
    class Person

    {
    # 名前プロパティです
    protected $name;
    # 年齢プロパティです
    protected $age;
    
    public function getName()
    {
    return $this->name;
    }
    
    public function getAge()
    {
    return $this->age;
    }
    
    public function setName($name)
    {
    $this->name = $name;
    }
    
    public function setAge($age)
    {
    $this->age = $age;
    }
    }
    # Personを継承した、Teacherを定義します
    class Teacher extends Person
    {
    private $subject;
    private $category;
    
    public function getSubject()
    {
    return $this->subject;
    }
    public function getCategory()
    {
    return $this->category;
    }
    
    public function setSubject($subject)
    {
    $this->subject = $subject;
    }
      public function setCategory($category)
    {
    $this->category = $category;
    }
    }
    $teacher = new Teacher();
    // 親クラスのメソッドにもアクセスできます
    $teacher->setName('太郎');
    $teacher->setAge(35);
    echo '名前: ' . $teacher->getName() . '<br>';
    echo '年齢: ' . $teacher->getAge() . '<br>';
    // 今まで通り生成したインスタンスに紐づいたメソッドにアクセスします
    $teacher->setSubject('数学');
    $teacher->setCategory('High School');
    echo '科目: ' . $teacher->getSubject() . '<br>';
    echo '種別: ' . $teacher->getCategory() . '<br>';
    /*
    出力結果)
    名前: 太郎
    年齢: 35
    科目: 数学
    種別: High School
    */
    //=================コード====================

    3-2-2 メソッドのオーバーライド
    PHPでは同じ名前の関数を複数記述することができませんが、クラスでは、サブクラスにおいて、スーパ
    ークラスのメソッドを上書きすることができます。これをメソッドのオーバーライドと呼ぶ。

    //=================コード====================
    class A
    {
    public function a1()
    {
    echo 'a';
    }
    }
    class B extends A
    {
    # a1メソッドをオーバーライドします
    public function a1()
    {
    echo 'b';
    }
    }
    $b = new B();
    $b->a1();
    # 出力結果) b
    //=================コード====================

    3-2-3 サブクラスのメソッドからのスーパークラスのメソッド呼び出し
    オーバーライドの項ではメソッドの上書きについて説明しましたが、
    オーバーライドしたメソッドや他のメソッドからスーパークラスのメソッドを呼び出したい場合がありま
    す。
    その場合は、 parent キーワード + :: + メソッド名 を利用することで、呼び出しできます。

    //=================コード====================
    class A
    {
    public function a1()
    {
    echo 'a';
    }
    }
    class B extends A
    {
    public function a1()
    {
    # スーパークラスのa1メソッドを呼び出します
    # parent::メソッド名();
    parent::a1();
    echo 'b';
    }
    }
    $b = new B();
    $b->a1();
    # 出力結果) ab
    //=================コード====================

