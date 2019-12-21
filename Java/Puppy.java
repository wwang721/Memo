public class Puppy{

	//private static int classVar = 0; // 类变量

	// 实例变量
	String name;		
	int puppyAge;
	int weight;

	public Puppy(String name){
		// 构造器
		this.name = name;
	}

	//以下函数皆为类的方法
	public void setAge(int age){
		//int i = 0;	// 局部变量
		puppyAge = age;
	}

	public void setWeight(int weight) {
		this.weight = weight;
	}

	public int getAge(){
		System.out.println("The puppy's age: "+puppyAge);
		return puppyAge;
	}

	public void printPuppy() {
		System.out.println("Name: "+name);
		System.out.println("Age: " + puppyAge);
		System.out.println("Weight: " + weight+" kg");
	}

}