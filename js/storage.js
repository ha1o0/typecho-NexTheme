(function() {
  // 设置localStorage的值
  function setLocalStorage(key, value) {
    try {
      localStorage.setItem(key, JSON.stringify(value));
    } catch (e) {
      console.error('设置localStorage失败:', e);
    }
  }

  // 从localStorage读取值
  function getLocalStorage(key) {
    try {
      const value = localStorage.getItem(key);
      try {
        return JSON.parse(value);
      } catch (e) {
        return value; // 如果不是JSON格式，直接返回原始值
      }
    } catch (e) {
      console.error('读取localStorage失败:', e);
      return null;
    }
  }

  // 从localStorage删除某个key的值
  function removeLocalStorage(key) {
    try {
      localStorage.removeItem(key);
    } catch (e) {
      console.error('从localStorage删除数据失败:', e);
    }
  }

  // 清除所有localStorage数据
  function clearLocalStorage() {
    try {
      localStorage.clear();
    } catch (e) {
      console.error('清除localStorage失败:', e);
    }
  }

  // 将模块对象暴露给全局变量
  window.storageModule = {
    setLocalStorage,
    getLocalStorage,
    removeLocalStorage,
    clearLocalStorage,
  };
})();
