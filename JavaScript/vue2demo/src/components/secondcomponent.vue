<template>
　　<div id="secondcomponent">
        <h1>Log in Your Account</h1>

        <form action="http://localhost/vueLogin.php" method="get">
        <!--需要先打开 PHP Apache 服务器: sudo apache start-->
        <label>Username</label>
        <input type="text" name="username" placeholder="your username"><br><br>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="your password"><br><br>
        
        <input type="submit" value="Log in">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
        <input type="reset" value="Reset"><br>
        </form><br>

        <button v-on:click="counter += 1">Add 1</button>
        <p>The button above has been clicked {{ counter }} times.</p>
        
        <span v-bind:title="message">
            鼠标悬停几秒钟查看此处动态绑定的提示信息！
        </span>
　　</div>
</template>
 
<script type="text/javascript">

export default {
    data () {
        return {
            message: '页面加载于 ' +  new Date().toLocaleString(),
            counter: 0
        }
    }
}
</script>
 
<style>
</style>